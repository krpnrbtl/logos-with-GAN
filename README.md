# Production of Logos with Generative Adversial Networks
The aim of the project is to provide a system that can produce various variations of a
large number of logos to facilitate and speed up the process of choosing a logo. Within
the scope of the study, the system presents the prototype logos that it produced earlier
than the sample logos chosen by the potential customer. The customer prefers one
of these presented logos. This work; even though production quality cannot produce
designs, modern artificial intelligence technique helps designers get a potential logo
idea in the creative design process with Generative Adversarial Networks.

Data from the LLD database is resized and used for GAN training. Generator and
discriminator network structure are designed and combined to create the GAN model.
Logos created as a result of the training are stored in the database. Logos are presented
to the customer through database and website connection.

The project was realized in Google Colaboratory, which is Jupyter Notebook
environment. The project language was chosen as Phython due to its many libraries
that are easy to use. Visual Studio Code environment and PHP coding language
are preferred for the creation of the website where the produced pictures will be
presented. MYSQL was used as database.

LLD - Large Logo Dataset - https://data.vision.ee.ethz.ch/cvl/lld
