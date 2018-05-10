# Introduction to the FAQ Project at NJIT

This project is to create a website + Chabot that work with slack and eventually other chat platforms.  The idea is to make a virtual teaching assistant that can help manage questions that I receive.   Once the basic system works I want to add features that turn answering questions into a game that students earn points for. 

There is a training program for people to participate, so that we can all have the same core skill set and know how to work on the project.  This training is similar to what you might receive when being on boarded to a new company.   

**The training program has 2 parts:**

1.  [Laravel Basics -> Laracast videos 1-20](https://laracasts.com/series/laravel-from-scratch-2017)

2.  [FAQ project introduction](https://www.youtube.com/playlist?list=PLytMRtonvCRUjrQqKaQeOd2KoYq_ifcpD) videos 1-4 now; however, there will be a total of about 10 - 12 videos by the time I’m done with making the training program.  Videos 5-10 will be about blade templates, routes, controllers, forms, and more testing.

The basic practices of this project are that you will take a task that is fairly small and complete the feature, testing, and everything needed to include that feature in the project.  Once we get going we will be using a task board.

There are a few different jobs that we will need eventually.   For example, we may want to have someone to design the visual of the feature and / or write specifications.  Eventually we need people to work on the hosting on Heroku or AWS.  We are also going to work on some data science things this summer.   I plan on converting the current FAQ project to use a graph database before launching it in the fall to use it in 5 classes with around 160 students.

## What do I (student)get out of this?

1. Professional experience on a project that will be used by a large number of people.
2. Students Developers will be featured in a "Hall of Fame" that hylights their contributions
3. This is a chance to work on small pieces of a project and to gain experience using current industry standard processes and technologies.
4. You help to build something that will last and can be used as a portfolio project that clearly identifies your contributions to the project
5. You are able to work on a  project with a team of people and make important contributions 

## What does NJIT / Professor Williams get out of this?

1. Students always ask me about projects and I don't know what to do, so this is a streamlined way to help more students.
2. I would like to upgrade the curriculum to focus more on data science and using Laravel will make developing a high quality application that will generate data for other classes
3. I want to use this project to showcase what our students are able to do for employers, so we get name brand recognition by local employers
4. I want investigate how technology can improve the educational experience and effectiveness for students.
5. I feel that this is a safe way for students to get experience
6. I feel this is way for students to demonstrate their abilities and hylight their work in a manageable way.


## Climb The Ladder - Roles and Process 

1. You start of as a student trainee and must demonstrate completion of the FAQ tutorial and the Laravel basics through the screencast, if you know Laravel you can start with the FAQ project tutorial series
2. Once you complete the tutorial you can be raised to a student developer and begin completing features
3. Student Developers can be promoted to other roles in the future and specialize in areas such as devops, data science, mobile, etc...

## To run the FAQ project:

1. git clone https://github.com/NJIT-WIS/faq.git
2. CD into FAQ and run composer install
3. cp .env.example to .env
4. run: php artisan key:generate
5. setup database / with sqlite or other https://laravel.com/docs/5.6/database
6. Run: php artisan migrate
7. Run: unit tests: phpunit
8. Run: seeds php artisan migrate:refresh --seed

## Project Resources:

## Prerequisites:
You need to complete upto video 20 where it has testing to begin this project, if you don't have previous experience with Laravel.

https://laracasts.com/series/laravel-from-scratch-2017

## FAQ Tutorial Playlist 
https://www.youtube.com/playlist?list=PLytMRtonvCRUjrQqKaQeOd2KoYq_ifcpD

## Relevant Laravel Resources:

https://laravel.com/docs/5.6/eloquent

https://laravel.com/docs/5.6/database

https://laravel.com/docs/5.6/seeding

https://laravel.com/docs/5.6/testing

## Relevant General Resources

https://www.atlassian.com/git/tutorials/comparing-workflows/gitflow-workflow

https://www.jetbrains.com/phpstorm/

http://agiledata.org/essays/tdd.html

## Free Alternative:
https://code.visualstudio.com/