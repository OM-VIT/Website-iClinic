import cv2
import numpy as np
import matplotlib.pyplot as plt

a=cv2.imread("C:/Users/Jay/Downloads/horse.png")
plt.imshow(a)
plt.title('Original image')
plt.show()
plt.figure()

b=cv2.bitwise_not(a)
plt.imshow(b)
plt.title('Negative Image')
plt.show()
plt.figure()

c=~ a  #negation
plt.imshow(c)
plt.title("~Image")
plt.show()
plt.figure()

d=255-c
plt.imshow(d)
plt.title("Image")
plt.show()
plt.figure()
