
library(C50) 
library(rpart) 
#data(churn)
args <- commandArgs(trailingOnly = TRUE)
#data<-read.csv("/var/www/html/vighubjson/search/59431e7c9340e.csv", header = FALSE, sep = ",", as.is=FALSE)
data<-read.csv(args[1], header = FALSE, sep = ",", as.is=FALSE)

Variables  <- c(3, 4, 5, 6, 7, 8)
datos      <- data[, Variables]  
datos      <- rbind(datos, data[, Variables]) 


# FOLDS
# ------------------------------------------------------------------------------- 
set.seed(1)
Folds         <- 10            
datos$kfold   <- sample(1:Folds, nrow(datos), replace = T)


# MODELOS 
# -------------------------------------------------------------------------------- 
Iter   <- data.frame(iteracion = NULL, aciertos = NULL)
for (i in 1:Folds)
{
  Test          <- subset(datos, kfold  == i)
  Entrenamiento <- subset(datos, !kfold == i) 
  Modelo        <- rpart(V8 ~ .,data = Entrenamiento)       
  Prediccion    <- predict(Modelo, Test, type = "class")  
  MC            <- table(Test[, "V8"],Prediccion)           
  Aciertos      <- MC[1, 1] / (MC[1, 1] + MC[2, 1])
  Iter          <- rbind(Iter, data.frame(Iter = i, acierto = Aciertos))  
}


# GRAFICO
# -------------------------------------------------------------------------------- 
jpeg(paste("./", args[1],".jpg", sep=""))
promedio <- format(mean(Iter$acierto, na.rm=TRUE)*100,digits = 4)
plot(Iter,type = "b", main = "% Prediccion en Cada Iteracion",
     cex.axis = 2,cex.lab = 1.5,cex.main = 2, CexSub = 2, 
     xlab ="No. de Iteraciones", ylab="% Prediccion")
abline(h = mean(Iter$acierto), col = "blue", lty = 5)
legend("topright", legend = paste("Eficiencia de Prediccion =", promedio, "%"),
       col = "blue", lty = 4, lwd = 1.5, cex=1.5, bg=NULL)
dev.off()
print(promedio)
