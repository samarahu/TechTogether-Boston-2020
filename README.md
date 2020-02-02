# PetMatch - Hackathon Project for TechTogether Boston 2020
By: Samarah Uriarte, Natalie Starczewski, Eva Lynch, and Amelia Fordyce

Note: To view online, visit https://ttboston20.appspot.com/landing.html

Built With:
1. Amazon Rekognition, Amazon Web Services 
2. Bootstrap, CSS, HTML5 
3. Database 6. 
4. Google App Engine, Google Cloud, Google Maps, Google Maps Javascript API 
5. Java, Javascript, MySQL, PHP

## Inspiration
While the group was brainstorming ideas for the hackathon, Samarah's passion for helping animals came up and she suggested to focus on developing a web application that allowed potential pet owners to find a new best pet friend with ease and efficiency. Eva, Natalie, and Amelia, all pet owners themselves, shared this love of dogs and cats. They decided to proceed with the PetMatch project to work towards solving the major problem of homeless animals and to promote pet ownership due to its various benefits. According to the ASPCA, 6.5 million animals enter U.S. animal shelters nationwide every year. This is a heartbreaking public issue, and the goal of our project is to support animals in finding their forever homes.

## What It Does
Our website provides three services in the pursuit of finding homes for stray animals and making the world a better place. We offer a pet pairing service that helps users find a pet who would be the perfect fit for their family. We integrated the Google Maps JavaScript API in order to provide a search for adoptable pets by proximity. And finally, we provide a service where owners with missing pets can use Amazon's facial and object recognition software in order to search our database of rescued animals for the one they are missing.

## How We Built It
HTML and CSS were used as the base languages for building the front-end of PetMatch. Front-end developers Amelia and Samarah used Bootstrap, a library of front-end components, to design and organize the website and application features. Natalie created the PetMatch Search page utilizing MySQL, PHP, and HTML to produce a form that takes in the user's preferences and queries the PetMatch database of animals based on those preferences to return all of the pets who are good fits. She also created a mock dataset of 60 dogs and cats for testing purposes that she imported into a MySQL database hosted on the Simmons University webserver. Eva was the developer behind the Google Maps JavaScript API integration to show potential pets based on location and deployed the app to Google App Engine.

## Challenges We Ran Into
Bootstrap provides a fair amount of challenge to any beginner looking to play around with styling and content. We also ran into the problem of our desired facial recognition software not working so great with animal faces, so we focused our efforts on creating the best MVP while having that feature detailed statically on the Lost or Found page. It was challenging to adapt our database knowledge to Google App Engine, a new and unfamiliar platform, and we ended up sidelining our plans to integrate our MySQL database with Google's Cloud SQL in light of the timing constraints. And, as always, some frustration with the command-line!

## Accomplishments That We're Proud Of
We are proud of our site design, our interactive map, the pet-matching quiz, and our ideas for the upload feature. We put a lot of thought and effort into our graphic design and color choice and actively pursued ways to connect our project with cutting-edge technology and scaling tools while working to enhance society. Through that effort, we accomplished our goal of creating a warm, welcoming, and modern website.

## What We Learned
Samarah and Amelia learned how to utilize Bootstrap to make the website clean, efficient, and responsive. Eva and Natalie learned machine learning and Google App Engine to help users use their personal preferences to find a perfect pet. They also learned about Amazon Facial Recognition to take account of the new pets uploaded into the database.

## What's Next for PetMatch
With more time, PetMatch's functionality could be expanded and built upon. We would love to integrate more Google Cloud products, especially a Cloud SQL Database. We would also love to add a fourth feature, which would be a specialized search and pet pairing for therapy animals. Additionally, the facial recognition feature that we included in our original design for PetMatch would be fully developed and added to enhance the website's serviceability to our target audience of individuals who have thought about adopting or currently own a pet. This aspect of PetMatch makes it accessible to a wider range of people and gives users a reason to visit the website even after finding a new pet.
