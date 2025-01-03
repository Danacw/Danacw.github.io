---
title: "Customer Segmentation RFM and Kmeans Analysis"
excerpt: "Segment users based on recency, frequency, and monetary value of past purchases"
collection: portfolio
---

Project description: An RFM analysis ranks and groups customers based on three factors: recency, frequency, and monetary value. 

In this analysis I first performed a standard exploratory data analysis (EDA) to find stats on the following:
* The most purchased and highest grossing items
* The least purchased and lowest grossing items
* The best and worst regions based on quantity of purchases
* The average price per item, average cart value, average cart quantity, and average orders per users

I then used a K-means clustering algorithm from the Scikit Learn Python library to standardize our dataset and partition users based on recency, frequency, and value of purchases. This analysis allows companies to determine the percentage of high and low value customers, which ultimately shapes future targeting efforts and marketing strategies.  

More: 

For a summarized breakdown on my recency, frequency, and monetary value findings, view my workbook in Tableau Public:
* [RFM Analysis in Tableau Public](https://public.tableau.com/views/RFM_Analysis_17358626428770/Story1?:language=en-US&publish=yes&:sid=&:display_count=n&:origin=viz_share_link)

For a more detailed breakdown of my whole process including my exploratory data analysis, RFM segmentation methods, and KMeans analysis, view my code in Jupyter Notebook:    
* [Customer Segmentation in NB Viewer](https://nbviewer.org/github/Danacw/Customer_Segmentation/blob/main/Customer_Segmentation.ipynb)

