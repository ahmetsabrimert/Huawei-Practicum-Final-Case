# Huawei-Practicum-Final-Case
Huawei Practicum Final Case
In this project, a web application is run on Huawei Cloud using multiple services. This application is a user registration application. The user's name, email and phone information are saved in the database. Application files and uploaded images are transferred to SFS. After that, files in SFS are transferred to an OBS bucket by running a script. Then, a function (not a FunctionGraph function. It's a function that works in ECS) runs and sets the picture in this bucket to 100x100 pixels and transfers it to another OBS bucket and my website uses it from this OBS bucket.

