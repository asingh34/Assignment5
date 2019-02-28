<!DOCTYPE html>
<html>
<head>
   <title>Akshay Desai | Assignment 5</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body class = container>
   <header>
         <img src ="images/akshay.jpg" alt="aks">
         <h1 class = name> Akshay Desai</h1>

   </header>

    <?php include "inc/nav.inc";?>

    <aside>
      <ul>
         <li>CS Student</li>
         <hr>
         <li>Incoming Software Engineer</li>
         <hr>
         <li>Resident Advisor</li>
         <hr>
      </ul>
   </aside>



   <main>

   <div class = block>
      <h2>Early Life</h2>
      <hr>
         <div class = early>
      <p> I am originally from Chicago, IL and moved to Philadelphia, PA during my freshman year of high school. There, I took my first computer science class that piqued my interest in the subject. This interest however developed late in high school, so I started school at the University of Rochester actually as an international relations major. I concurrently took a computer science course and significantly enjoyed it more, so I changed major to computer science and haven’t looked back. </p>
         </div>
   </div>

   <div class = block>
      <h2>Education</h2>
      <hr>
      <div class = ed>
      <p> I took many interesting courses in computer science. I started from the beginning, taking “The Science of Programming”, The <em>University of Rochester’s</em> introduction class to computer science. Since then, I’ve taken many classes and even took more classes than were required for the major. A few notable ones are “Operating Systems”, Advanced Algorithms”, “Web Development”, and “Android Development”; in these classes, I’ve learned many concepts and techniques important to being a software engineer. I also have been a Workshop Leader/ Teaching Assistant beginning my second semester of college. I led workshops for “The Science of Programming” and then “Data Structures and Algorithms”. Later in my academic career, I became a Teaching Assistant for “Computer Organization”. Along with those leader experiences, I also am a Resident Advisor (RA), where I live with my residents and ensure a happy living environment which is both safe and enjoyable. In my spare time, other than coding, I dance on a competitive dance team called Rochester Bhangra. It is an Indian dance from the state of Punjab and we travel to competitions every year; Toronto, Chicago, DC, and NYC to name a few.</p>
      </div>
   </div>

   <div class = block>
      <h2>Job History</h2>
      <hr>
      <div class = job>
      <p> I’ve worked a few jobs relating to computer science. I founded a startup called Change, there, I was CTO and Lead Software Engineer leading 3 other developers. The purpose of the startup was to connect donors and volunteers to student groups and charities in the Rochester area. We received first-round funding from the National Science Foundation and were a featured startup in the NextCorps Incubator. I also had an internship last summer as a Software Development Engineer at Remitly, an international money transfer company based in Seattle. I worked as a full-stack developer in the Global Product Team, working to ease customer use and better their experiences. My project, specifically, was to create a service for receivers of the money transfer to live track the money. This project involved building the front end for the user to see, the database interaction to get the data, and everything in between. I will be returning to the same team as a full-time engineer upon graduation. </p>
      </div>
   </div>

   </main>



   <?php include "inc/footer.inc";?>

   <nav class = next>
      <ul>
          <li> <a href = "anant.php">Back</a></li>
          <li> <a href = "elon.php">Next</a></li>
      </ul>
   </nav>


    <script src="http://code.jquery.com/jquery.js"></script>
   <script src="js/menu-highlighter.js"></script>
</body>
</html>
