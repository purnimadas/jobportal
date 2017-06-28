<?php

class JobTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');

		$jobs = array(
             ['user_id'=>'1' , 'jobcategory_id'=>'8','company_name'=>'W3Engineers','job_post'=>'Software Engineer (Android), Khulna

','job_description'=>'The applicant must have knowledge on, Java / Android','job_nature'=>'Full-time','educational_requirements'=>'B.Sc or M.Sc in Computer Science from reputed local or international university.
Educational qualification will be relaxed for experienced candidates.','experience'=>'0 to 2 year(s)','job_location'=>'Khulna','salary_range'=>'Negotiable','starting_date'=>'21-06-2017','ending_date'=>'21-07-2017','image'=>''],

             ['user_id'=>'2' , 'jobcategory_id'=>'8','company_name'=>'Bangla Phone Limited','job_post'=>'Executive, Customer Support','job_description'=>'Communicating updates of fault recovery with customers
Customer complaint/feedback entry into management software
Liaison with back-office Operation Center
Monitoring of network
Network fault entry into management software.','job_nature'=>'Full-time','educational_requirements'=>'Bachelor in Engineering OR any Science Subject. from a reputed university .','experience'=>'At least 1 year(s)','job_location'=>'Dhaka','salary_range'=>'Negotiable','starting_date'=>'25-05-2017','ending_date'=>'25-06-2017','image'=>''],
              
             ['user_id'=>'3' , 'jobcategory_id'=>'8','company_name'=>'Nascenia','job_post'=>'Senior Software Engineer (PHP)','job_description'=>'Develop PHP software in a complex system
Use PHP frameworks e.g. Symphony2, Laravel
Expert in Core Php Coding & Troubleshooting
Team management experience of Developers, Designers, Testers on multiple live projects
Building PHP web application from the ground level, as well as ability to modify and build on existing code
Coach and mentor the team of Software Developer/ team lead / designers in terms of choice of technology, database structuring, detailed design & commitments to achieve the desired results
Responsible for on-time delivery of projects, Ensure adherence to development standards and software quality
Coordinate with other system owners and leads, develop deployment and rollout plans as required.','job_nature'=>'Full-time','educational_requirements'=>'Graduate in CSE or related field from a reputed university','experience'=>'At least 6 year(s)
The applicants should have experience in the following area(s):
Programmer/Software Engineer
The applicants should have experience in the following business area(s):
Software Company','job_location'=>'Dhaka','salary_range'=>'Negotiable','starting_date'=>'14-06-2017','ending_date'=>'14-07-2017','image'=>''],

             ['user_id'=>'4' , 'jobcategory_id'=>'8','company_name'=>'Dynamic Solution Innovators','job_post'=>'UX Engineer','job_description'=>'Basic Javascript Knowledge is a must.
Boiler plate understanding of Java Script Libraries
Design pattern in Java Script.
Modernizr JavaScript Library Like NodeJs, BackboneJs, KineticJs
Good knowledge of jQuery, XML, JSON, AJAX
Assess existing sites for usability, design, content, and branding and make recommendations accordingly
Conducts user research through interviews, surveys, and Web analytics; define user goals and information needs; create task and system flows; develop scenarios
Designs clean, consistent user interfaces; design according to best practices using knowledge gained from user/product analysis
Produces wireframes and prototypes to depict the user interface
Designs and conducts remote or in-person usability tests with interactive prototypes; identify issues and make recommendations for improvement
Defines UI Specifications for hand-off to development team','job_nature'=>'Full-time','educational_requirements'=>'4 years graduation in Computer Science/ Engineering will be preferred.
Educational qualification would be relaxed for the highly experienced or deserving candidates.','experience'=>'0 to 2 year(s)','job_location'=>'Dhaka Division','salary_range'=>'Negotiable','starting_date'=>'21-06-2017','ending_date'=>'21-07-2017','image'=>''],
             
             ['user_id'=>'5' , 'jobcategory_id'=>'8','company_name'=>'SSL Wireless','job_post'=>'Programmer, Service Operation','job_description'=>'Manage infrastructure operations, operational process and procedures.
Proactively monitor, evaluate, troubleshoot and mitigate malfunctions in software applications and services.
Perform routine check of system platforms to identify performance issues and risks and mitigate them.
Complete any delegated new implementation and operational /deployment related activities on site or off site.
Provide Tier 2 technical support and troubleshooting to external customers and Tier 1 Helpdesk.
Technical/Semi-technical correspondence with principles.
Manage and review system logs.
Work as a member of a team that operates 24/7 in roaster, on site or off site','job_nature'=>'Full-time','educational_requirements'=>'B. Sc/Diploma in Computer Science/ Engineering from any reputed institute/university.','experience'=>'0 to 3 years. Fresher are encouraged to apply.','job_location'=>'Dhaka','salary_range'=>'Negotiable','starting_date'=>'21-06-2017','ending_date'=>'21-07-2017','image'=>''],

             ['user_id'=>'6' , 'jobcategory_id'=>'8','company_name'=>'Rapid Technologies Ltd.','job_post'=>'Full Stack Software Engineer (Node Js)','job_description'=>'We are looking for engineers who:
Are customer-focused, driven and passionate in creating premier experiences through well designed, tested and maintainable code-bases.
Always looking to learn and improve - independent self-learners who love to share what they find.
Are team-focused, pragmatic engineers who enjoy working on small, agile teams
1-2 years experience building commercial software.
Love crafting beautiful RESTful web-services and has strong knowledge in how the web works.
Have an understanding or experience using the CQRS pattern.','job_nature'=>'Full-time','educational_requirements'=>'B.Sc in Computer Science or equivalent degree
Educational qualifications requirements will be relaxed for professionally experienced candidates','experience'=>'1 to 3 year(s)
The applicants should have experience in the following area(s):
Programmer/Software Engineer','job_location'=>'Dhaka Division','salary_range'=>'Negotiable','starting_date'=>'20-06-2017','ending_date'=>'20-07-2017','image'=>''],

             ['user_id'=>'7' , 'jobcategory_id'=>'8','company_name'=>'MCC Ltd.','job_post'=>'Android Application Developer','job_description'=>'Design and develop android application
Analyze requirements and implement it into application
Maintain design pattern, best practices, UI pixel perfection and quality code
Contentiously adopt new technologies and attend training to enhance efficiency
Use appropriate framework as per requirement
Maintain readable, reusable code with proper commenting
Maintain version controlling system and project management tool','job_nature'=>'Full-time','educational_requirements'=>'B.S.C in Computer Science','experience'=>'1 to 2 year(s)','job_location'=>'Dhaka, Dhaka Division','salary_range'=>'Negotiable','starting_date'=>'22-06-2017','ending_date'=>'22-07-2017','image'=>''],

             ['user_id'=>'8' , 'jobcategory_id'=>'8','company_name'=>'Prime Tech Solutions Ltd.','job_post'=>'SQA Engineer','job_description'=>'Review Project requests and develops automation plans covering complex functions and integrated environments.
Develop test automation framework, automation scripts and automated test cases contributing to smoke, regression, performance, load and system test suites with object oriented design principles.
Participate in project team meetings for up-front analysis and design activities to provide testing/SQA inputs.
Design, Develop and Integrate automated test scripts and results with Test Case Management and Defect Management software to provide accurate test metrics and test management data.
Minimum five (02) plus years experience in test automation, computer programming/software development.
Experiences of analyzing complex systems and developing strategies to test such systems.
Knowledge of source control systems and configuration management.
Experiences of using SQL with regard to write and understanding queries and procedures.
Knowledge on integrating automated test software with test management and defect management applications
Experience on multiple platforms like Mobile (Android, iOS) and Web.
Should have previous experiences on SCRUM based Agile team','job_nature'=>'Full-time','educational_requirements'=>'B.Sc/ M.Sc in Computer Science & Engineering','experience'=>'At least 2 year(s)','job_location'=>'Dhaka','salary_range'=>'Negotiable','starting_date'=>'22-06-2017','ending_date'=>'22-07-2017','image'=>''],
             ['user_id'=>'9' , 'jobcategory_id'=>'8','company_name'=>'mPower Social Enterprises Ltd.','job_post'=>'Software Engineer','job_description'=>'Strong programming and problem solving skills.
Strong understanding of software development life cycle.
Understanding of object oriented software development and technologies such as java.
Knowledge in python is a plus
Deep understanding of SQL and RDMS
Understanding of front-end technologies, including HTML5, CSS3, Bootstrap, JavaScript, jQuery, etc.
Good in communication, especially in English.','job_nature'=>'Full-time','educational_requirements'=>'B.Sc. in Computer Science & Engineering from a reputed university.','experience'=>'0 to 1 year(s)','job_location'=>'Anywhere in Bangladesh','salary_range'=>'Negotiable','starting_date'=>'20-06-2017','ending_date'=>'20-07-2017','image'=>''],
 
             
             ['user_id'=>'9' , 'jobcategory_id'=>'8','company_name'=>'mPower Social Enterprises Ltd.','job_post'=>'Web Developer','job_description'=>'Strong understanding of PHP back-end development.
Good understanding of front-end technologies, including HTML5, CSS3, Bootstrap, JavaScript, jQuery, etc.
Experience in e-commerce based CMS management such as WordPress etc.
Knowledge and experience in WordPress CMS theme, plugin development.
Analyse, design and develop dynamic Web Application based on project documents.
Must have a good understanding of web production, mobile and desktop user interface and user experience and most importantly Responsive Web Design methods.
Experience setting up and maintaining hosting environments and version control (BitBucket).
Find ways to optimize website traffic using Google Analytics and Search Engine Optimization.
Must have hands on SQL query writing skill for complex business requirements.
Ability to meet tight deadlines.
Ability to code, design, develop, test and bug fix.
Implement and maintain of new or existing web applications written in PHP.
Good in communication, especially in English.','job_nature'=>'Full-time','educational_requirements'=>'B.Sc. in Computer Science & Engineering from a reputed university.','experience'=>'At least 2 year(s)','job_location'=>'Anywhere in Bangladesh','salary_range'=>'','starting_date'=>'20-06-2017','ending_date'=>'20-07-2017','image'=>''],
  
             ['user_id'=>'9' , 'jobcategory_id'=>'8','company_name'=>'mPower Social Enterprises Ltd.','job_post'=>'Sr. Software Engineer','job_description'=>'Strong programming and problem solving skills.
Strong understanding of software development life cycle.
Understanding of object oriented software development and technologies.
Ability to code, design, develop, test and bug fix.
Analyse, design and develop dynamic Web Application based on project documents.
Implement and maintain of new or existing web applications written in python/django.
Understanding of front-end technologies, including HTML5, CSS3, Bootstrap, JavaScript, jQuery, AngularJs.
Must have hands on SQL query writing skill for complex business requirements.
Ability to meet tight deadlines.
Good in communication, especially in English.','job_nature'=>'Full-time','educational_requirements'=>'B.Sc. in Computer Science & Engineering from a reputed university.','experience'=>'At least 2 year(s)','job_location'=>'Anywhere in Bangladesh','salary_range'=>'Negotiable','starting_date'=>'20-06-2017','ending_date'=>'20-07-2017','image'=>''],

             ['user_id'=>'10' , 'jobcategory_id'=>'8','company_name'=>'ADN EduServices Ltd.','job_post'=>'Faculty - Graphic Design','job_description'=>'Bring ideas and concepts to life through creative designs, graphics, and artworks.
Expertise in Affiliate Marketing, Amazon SEO, SMM, CPA Marketing.
Design web templates and web related graphics.
Prepare, Organize & modify flyers, brochures, leaflets, banners, logos, newsletters, and other advertising materials for modern marketing and advertisements','job_nature'=>'Full-time','educational_requirements'=>'B.Sc./ M.Sc. in CSE or equivalent degree','experience'=>'At least 3 year(s)','job_location'=>'Dhaka','salary_range'=>'Negotiable','starting_date'=>'05-06-2017','ending_date'=>'05-07-2017','image'=>''],

             ['user_id'=>'11' , 'jobcategory_id'=>'8','company_name'=>'SSG (Super Star Group)','job_post'=>'Software Developer/ System Analyst','job_description'=>'Execute full software development life cycle
Develop flowcharts, layouts and documentation to identify requirements and solutions
Write well-designed, testable code
Produce specifications and determine operational feasibility
Integrate software components into a fully functional software system
Develop software verification plans and quality assurance procedures
Document and maintain software functionality
Troubleshoot, debug and upgrade existing systems
Deploy programs and evaluate user feedback
Perform upgrades to make software and systems more secure and efficient
Collaborate with technical writers to create documentation for user support','job_nature'=>'Full-time','educational_requirements'=>'BSc in CSE from any reputed university','experience'=>'3 to 5 year(s)','job_location'=>'Dhaka','salary_range'=>'Negotiable','starting_date'=>'08-06-2017','ending_date'=>'08-07-2017','image'=>''],

             ['user_id'=>'12' , 'jobcategory_id'=>'8','company_name'=>'Renown Talent Acquisition Agency(Telecom,Distribution Management Sys.)','job_post'=>'Software Engineer (Application Support & Maintenance)','job_description'=>'Provide L2/L3 level Technical Support to client.
Troubleshoot application related tickets raised by customer.
Troubleshoot issues/queries raised by Customer.
Development for problem tickets/bug fixes
RCA Documentation and Issue resolution document.','job_nature'=>'Full-time','educational_requirements'=>'BSc/ BA in computer science or relevant field;
MSc/MA will be appreciated.
Engineering degree is preferable','experience'=>'At least 3 year(s)
The applicants should have experience in the following business area(s):
Telecommunication','job_location'=>'Dhaka Division','salary_range'=>'Negotiable','starting_date'=>'30-05-2017','ending_date'=>'30-06-2017','image'=>''],

             ['user_id'=>'13' , 'jobcategory_id'=>'8','company_name'=>'Systems Solutions & Development Technologies Ltd.','job_post'=>'Android Developer/ Solution Delivery Engineer, Android','job_description'=>'Analyze, Design and Develop innovative Android device Applications/ Products in a Client/ Server environments
Familiarity with Android platform tools and AOSP
Thorough knowledge of software development practices and methodologies
Architect Android Apps and custom views.
Deliver high-quality work on tight schedules.
Plan, organize, and control all activities associated with the application development of assigned technical projects of varying sizes.
Have to be able to work under pressure and maintain strict deadline.
Up to date knowledge of major reusable Open Source software and frameworks','job_nature'=>'Full-time','educational_requirements'=>'B.Sc/ M.Sc in Computer Science from any reputed university(BUET, IUT, BITs and Dhaka, Khulna, Rajshahi, Chittagong University graduate will get preference)','experience'=>'1 to 4 year(s)
The applicants should have experience in the following area(s):
Software Architect, Project Manager (Software), Team Leader (Software), Technical Lead (Software), Programmer/Software Engineer, Mobile apps developer
The applicants should have experience in the following business area(s):
Software Company','job_location'=>'Anywhere in Bangladesh','salary_range'=>'Negotiable','starting_date'=>'05-06-2017','ending_date'=>'05-07-2017','image'=>''],

             ['user_id'=>'14' , 'jobcategory_id'=>'8','company_name'=>'Walton Hi-Tech Industries Ltd.','job_post'=>'Software Engineer','job_description'=>'To commence active part in WPMS and other ad-hoc system or projects
Preparing report in asp.net web form
Maintaining and trouble-shooting existing systems
Maintaining strong communication between team members and coordinator','job_nature'=>'Full-time','educational_requirements'=>'BSc. in CSE/ ICT from any reputed university of Bangladesh or abroad','experience'=>'At least 2 year(s)','job_location'=>'Dhaka','salary_range'=>'Negotiable','starting_date'=>'21-06-2017','ending_date'=>'21-07-2017','image'=>''],

             ['user_id'=>'15' , 'jobcategory_id'=>'8','company_name'=>'Fusion Infotech Limited','job_post'=>'Intern','job_description'=>'Good communication skill, presentation skill, smartness and hardworking attitude are must.Good team player, sharp, polite, with a pleasing personality, quick learning.
Most have good interpersonal and communication skills both in written & spoken English.
Experience working on various documents such as" Understand Documents and installation.
Self-motivated and able to work under pressure .
Should be capable to work as individual or in team
Applicants should have excellent analytical skills, with the ability to work in teams.','job_nature'=>'Full-time','educational_requirements'=>'B.Sc in Computer science, Engineering graduates or Graduate from Science subject can apply.
Graduates from public universities, IUT, AUST, MIST, NSU, EWU, BUP, AIUB Graduates are encourage to apply','experience'=>'Na','job_location'=>'Dhaka','salary_range'=>'Tk. 8000 - 10000
Salary will be increased once the intern will be offered employement at Fusion Infotech limited.','starting_date'=>'20-06-2017','ending_date'=>'20-07-2017','image'=>''],

             ['user_id'=>'16' , 'jobcategory_id'=>'8','company_name'=>'Comillaonlineincome.com','job_post'=>'Wordpress Developer Needed In Comilla','job_description'=>'Must have good knowledge in e commerce website development with woo commerce
Work experience in HTML, PHP, CSS, Bootstrap
Real life experience to speedup the website
WordPress Website security knowledge
Basic On-page SEO knowledge
Payment gateway integration experience (Paypal)
Basic Photoshop knowledge (Clipping path and web optimized image)','job_nature'=>'Full-time','educational_requirements'=>'CSE/ Diploma (experienced candidate will be considered)','experience'=>'2 to 4 year(s)
The applicants should have experience in the following area(s):
Web Developer/Web Designer
The applicants should have experience in the following business area(s):
E-commerce, Web Media/Blog','job_location'=>'Comilla (Comilla Adarsha Sadar)','salary_range'=>'Negotiable','starting_date'=>'20-06-2017','ending_date'=>'20-07-2017','image'=>''],

             ['user_id'=>'17' , 'jobcategory_id'=>'8','company_name'=>'Techno Lead Corporation','job_post'=>'Software Engineer (PHP Developer)','job_description'=>'Develop and maintain web-based applications
Software Project Management
Documentation','job_nature'=>'Full-time','educational_requirements'=>'Graduation in Computer Science & Engineering from Top Rated University','experience'=>'At least 2 year(s)','job_location'=>'Sylhet','salary_range'=>'Negotiable','starting_date'=>'26-06-2017','ending_date'=>'26-07-2017','image'=>''],

             ['user_id'=>'18' , 'jobcategory_id'=>'8','company_name'=>'Paradise Premier','job_post'=>'Manager, IT','job_description'=>'Analyzing and creating computer information systems and applications to manage systems information and to setup client software as required.
Preparing, monitoring and overseeing the progress, implementation, and support of information technology services
Maintain and create backup data for the database system and for internal servers of the company; provide technical expertise and support for all company departments regarding applications and information system issues and are responsible for maintenance and upkeep of all software applications, especially all data related to the business of the company.
Responsible for maintaining, troubleshooting and keeping the companys telecommunication systems smoothly operating with minimal issues to report (phones, webinars, internet fax).
Prepare budget for the IT department and oversee budget spending accordingly; support of all computer desktops, laptops, equipment and servers to maintain their integrity and support and service of product development and research of IT related matters, especially outside networking.
Evaluate new software and hardware making sure they comply with company standards and regulations; keep track of inventory and keep inventory of licenses and track compliance as well and cooperate with other department heads of concerns regarding software, and hardware conflicts.
Ensure that the IT policy is in accordance with the companys business policy and is responsible for maintaining the technology standards of the company while providing for its technical needs.
Maintain communication and computer systems. Their work may involve installation and configuration of various hardware such as routers, hubs, switches, and modems; installing software; troubleshooting computer and network problems; fix hardware and software related issues; and maintaining the entire computer network system to avoid the occurrence of hardware or software issues.
Responsible for ensuring the computer networks security, which normally involves virus and malicious software prevention and removal.','job_nature'=>'Full-time','educational_requirements'=>'B.Sc. in CSE/ EEE/ IT from any renowned public or private university with good academic records','experience'=>'10 to 14 year(s)
The applicants should have experience in the following area(s):
Project Manager (IT System), Network Engineer/Network Administrator, System Engineer (Computer Network & System), IT System Management, Security Management of IT System
The applicants should have experience in the following business area(s):
Electric Wire/Cable, IT Enabled Service, Logistic/Courier/Air Express Companies, Manufacturing (FMCG), Manufacturing (Light Engineering & Heavy Industry), Spinning','job_location'=>'Anywhere in Bangladesh','salary_range'=>'Negotiable','starting_date'=>'24-06-2017','ending_date'=>'24-07-2017','image'=>''],

             ['user_id'=>'19' , 'jobcategory_id'=>'9','company_name'=>'DBL GROUP','job_post'=>'Medical Officer','job_description'=>'Ensure overall health and safety issues in the factories and perform health checkup of workers and staff periodically
Health checkup of employees at the time of recruitment
Prescribe medicine and other advices to the attending patients
Provide first aid to emergency patients and take necessary actions to refer them to specialized nearby Hospitals for better management (if required) with information to the factory management
Keep records of sickness, injury or accidents with their analysis to prevent them to a minimum level
Plan strategically to keep and maintain a good and healthy occupational environment
Conduct health related training program to create awareness about health & hygiene','job_nature'=>'Full-time','educational_requirements'=>'MBBS from any recognized medical college having registration with BMDC','experience'=>'1 to 2 year(s)','job_location'=>'Gazipur','salary_range'=>'Negotiable','starting_date'=>'05-06-2017','ending_date'=>'05-07-2017','image'=>''],

             ['user_id'=>'20' , 'jobcategory_id'=>'9','company_name'=>'A Leading Group of Companies','job_post'=>'Doctor (Medical Officer)','job_description'=>'Examine patients and suggest for medication.
Routine check-up of patients.
Any other as deemed necessary','job_nature'=>'Full-time','educational_requirements'=>'MBBS with exposure in medicine','experience'=>'4 to 5 year(s)
The applicants should have experience in the following area(s):
Doctor/Consultant
The applicants should have experience in the following business area(s):
Hospital, Clinic','job_location'=>'Iraq','salary_range'=>'Tk. 160000 - 240000','starting_date'=>'07-06-2017','ending_date'=>'07-07-2017','image'=>''],

             ['user_id'=>'21' , 'jobcategory_id'=>'9','company_name'=>'Zuellig Pharma Bangladesh Ltd.','job_post'=>'Medical Information Officer (MIO)','job_description'=>'To formulate and implement strategies to achieve the sales target in the assigned territory
Create brand value of the product(s) at the Doctor front
Remain vigilant on the competitors activities and provide information
Peruse sales leads, visit existing and new customer
Evaluate customer needs and suggest appropriate products and services, respond to customer enquiries
Negotiate the business terms within the limit of authority and conclude sales orders to meet','job_nature'=>'Full-time','educational_requirements'=>'Minimum Bachelor degree from any discipline','experience'=>'Na','job_location'=>'Barisal, Chittagong','salary_range'=>'Negotiable','starting_date'=>'05-06-2017','ending_date'=>'05-07-2017','image'=>''],

             ['user_id'=>'22' , 'jobcategory_id'=>'9','company_name'=>'ACI Godrej Agrovet Private Ltd.','job_post'=>'Farm Manager (Breeding Farm & Hatchery)','job_description'=>'Effectively manage the overall operations of breeder farm and achieve the targeted production of hatching eggs.
Monitor the breeder birds regularly for weight profiles, uniformity, feed consumption, mortality etc. and verify these parameters against standards mentioned by the breeder suppliers.
Ensure that the quality of hatching eggs supplied to the hatchery are healthy and vital and of the required fertility.
Audit breeder farms regularly to check on the level of adherence to set standard operating procedures.
Monitor the maintenance & repair of Breeding farm, Hatchery equipment and generator.
Farm administration (address workers grievance, maintain discipline, identify most valuable workers, reduce worker turn over, asses training needs and implement training programs).
Monitor and coordinate Hatchery activities (such as hatching of eggs, sorting, vaccination, check eggs weight loss, incubation hour, chicks weight percentage, egg receiving, egg storage, egg setting, egg transferring, analysis of egg breakout troubleshooting, chicks pull out, chicks grading, chicks quality, chicks delivery).
Manage Local issues strategically and maintain liaison with related Govt. authorities.','job_nature'=>'Full-time','educational_requirements'=>'Doctor of Veterinary Medicine (DVM) is mandatory requirement and MS will treated as an added advantage','experience'=>'At least 10 year(s)','job_location'=>'Panchagarh','salary_range'=>'Negotiable','starting_date'=>'05-06-2017','ending_date'=>'05-07-2017','image'=>''],
              
             ['user_id'=>'23' , 'jobcategory_id'=>'9','company_name'=>'PRAN Group','job_post'=>'Head Of Operations (Hospital Project)','job_description'=>'Supervise and evaluate hospital facility staff.
Ensure the confidentiality and integrity of the Hospital facility.
Responsible for the day to day operations of the facility,
Secure the financial stability of the establishment.
Reports on daily logistics and the long-term impacts of these daily logistics on the Hospital facility.
Ensure patient satisfaction, cultivates an efficient and safe environment.
Replace failing and outdated equipment and maintain adequate amounts of Hospital supplies.
Collects significant data and use the data to improve patient care.
communicates across medical staff and non-medical staff
Creates an efficient work environment.
Makes decisions to resolve problems quickly.
Enforce policies and oversee the staffs compliance to policies','job_nature'=>'Full-time','educational_requirements'=>'Graduation and Post Graduation from Reputed University with good academic bakground.','experience'=>'6 to 10 year(s)
The applicants should have experience in the following area(s):
Medical Administration
The applicants should have experience in the following business area(s):
Clinic, Hospital','job_location'=>'Dhaka','salary_range'=>'Negotiable','starting_date'=>'13-06-2017','ending_date'=>'13-07-2017','image'=>''],

             ['user_id'=>'24' , 'jobcategory_id'=>'9','company_name'=>'Bangladesh Specialized Hospital Ltd.','job_post'=>'Medical Technologist - Laboratory Medicine','job_description'=>'Examine body fluids and tissues for abnormal chemical levels, cells or bacteria & investigating coagulation factors and disorders.
Prepare tissue for microscopic examination by pathologists.
Taking and testing blood to determine its suitability for transfusions and preparing blood products
Conduct medical research and analyses.
Culturing and identifying micro-organisms and determining antibiotic sensitivities.
Operates and maintains sophisticated instruments and equipment used in the division, is able to properly set up, calibrate, maintain, operate and shut down such instruments.
Maintains competence in Laboratory Information System that is crucial to the quality operations of the laboratory and patient care.
Actively participates in Quality Improvement Programs essential to ensure that laboratory testing is accurate, timely and meets customer needs.
Trains and orientates new Medical Laboratory Technologists in the performance and interpretation of tests.
Microscopically examining prepared cellular slides for evidence of abnormality or disease.
Analyzing patient tissue to determine the presence of a pre-existing or neoplastic genetic condition &
Any other tasks is assigned by the management.','job_nature'=>'Full-time','educational_requirements'=>'Minimum Bachelor /Diploma Degree in Laboratory Medicine or Medical Technology under state Medical Faculty.','experience'=>'At least 2 year(s)
The applicants should have experience in the following area(s):
Medical Technologist/Lab Operator
The applicants should have experience in the following business area(s):
Hospital','job_location'=>'Dhaka Division','salary_range'=>'Negotiable','starting_date'=>'15-06-2017','ending_date'=>'15-07-2017','image'=>''],
             
             ['user_id'=>'25' , 'jobcategory_id'=>'9','company_name'=>'Bangladesh Eye Hospital Ltd','job_post'=>'Assistant Manager, Hospital','job_description'=>'Preference will be given who have working experience in eye Hospital in similar position','job_nature'=>'Full-time','educational_requirements'=>'Masters in any subject from any reputed university.','experience'=>'1 to 5 year(s)
The applicants should have experience in the following area(s):
Medical Administration
The applicants should have experience in the following business area(s):
Hospital, Group of Companies','job_location'=>'','salary_range'=>'Tk. 25000 - 30000','starting_date'=>'03-06-2017','ending_date'=>'03-07-2017','image'=>''],

             ['user_id'=>'26' , 'jobcategory_id'=>'9','company_name'=>'OYSTER Pharmaceuticals Ltd.','job_post'=>'QA Officer','job_description'=>'Monitor dispensing of raw materials as well as manufacturing & packaging processes in compliance with GMP
Perform IPC, BMR-BPR checking, change control activities and batch release activities
Prepare and control of SOPs and ensure QMS related documentation
Handle the Market Compliant, Deviation, CAPA, NCR & rejections
Handle the Batch document & Retention Sample and ensure proper investigation of quality incidents
Perform Training Needs Assessments (TNA) to prepare & conduct training programs of employees','job_nature'=>'Full-time','educational_requirements'=>'M. Pharma from any reputed university.','experience'=>'1 to 2 year(s)
The applicants should have experience in the following area(s):
Quality Controller /Assurance, Production, Research
The applicants should have experience in the following business area(s):
Pharmaceuticals','job_location'=>'Sylhet (Sylhet Sadar)','salary_range'=>'Negotiable','starting_date'=>'15-06-2017','ending_date'=>'15-07-2017','image'=>''],

             ['user_id'=>'26' , 'jobcategory_id'=>'9','company_name'=>'OYSTER Pharmaceuticals Ltd.','job_post'=>'QA In-charge','job_description'=>'Organize and carryout analytical activities of raw materials, packing materials and finished products and to ensure quality of product by implementing regularity guidelines.
Ensure proper documentation of all quality assurance related documents.
Ensure other activities like environment control, water sanitation, waste disposal, and validation, and ETP, housekeeping, health, personnel hygiene & recorded in specific formats & logbooks.
Ensure required GMP, GLP Training of QC/Production/Engineering/Ware house personnel.
Sampling & Analysis of Raw Materials, Packaging Materials, Finished Products and Water.
Handling of all sophisticated instruments like HPLC, UV-Spectrophotometer, IR, Dissolution tester, Auto Titrator & Disintegration tester etc.
Preparation and review of SOPs, specifications & methods for raw material, packaging material & finished product etc.
Validation of analytical methods, Cleaning & Qualification of equipment.
Preparation & standardization of volumetric solution, secondary working standards from reference standard etc.
Calibration of all sophisticated equipment.
To have enough skill to prepared & supervise Annual product review (APR) in all respective therapeutic category.
To prepared supervise the guide line for product dossier for export as per different countrys registration requirement.','job_nature'=>'Full-time','educational_requirements'=>'M. Pharma from any reputed university','experience'=>'5 to 7 year(s)
The applicants should have experience in the following area(s):
Quality Controller /Assurance
The applicants should have experience in the following business area(s):
Pharmaceuticals','job_location'=>'Sylhet (Sylhet Sadar)','salary_range'=>'Negotiable','starting_date'=>'15-06-2017','ending_date'=>'15-07-2017','image'=>''],

             ['user_id'=>'26' , 'jobcategory_id'=>'9','company_name'=>'OYSTER Pharmaceuticals Ltd.','job_post'=>'PMD In-charge','job_description'=>'To determine marketing plan of assigned products.
To analyze performances of assigned products.
To launch assigned new products.
To train-up newly recruited MR/MPOs.
Forecast promotional expense, develop and execute brand building exercise
Generate innovative idea to enhance brand value, participate in the field force training
Arrange Seminar/ Symposium, monitoring marketing activities
Arranging Doctor Conferences
Target & Sample Allocation
Market maintaining & monitoring
Preparing Action Plan for the Assigned Products
Drug Regulatory affairs (Pricing, Recipe, Annexure, Inclusion, DAR, Block List)
Arrange Training for the MPO/Manager (on the job training for experience MPOs/Managers and off the job training for newly recruit person)','job_nature'=>'Full-time','educational_requirements'=>'M. Pharm from any reputed university','experience'=>'5 to 7 year(s)
The applicants should have experience in the following area(s):
Pharmacist, Sales & Marketing (Pharmaceutical Products), Sales & Marketing (Medical Services)
The applicants should have experience in the following business area(s):
Market Research Firms, Pharmaceuticals, Public Relation Companies','job_location'=>'Sylhet (Sylhet Sadar)','salary_range'=>'Negotiable','starting_date'=>'11-06-2017','ending_date'=>'11-07-2017','image'=>''],
             ['user_id'=>'27' , 'jobcategory_id'=>'9','company_name'=>'RB GROUP','job_post'=>'Personal/ Private Nurse','job_description'=>'N/A','job_nature'=>'Full-time','educational_requirements'=>'Class Eight or SSC','experience'=>'Na','job_location'=>'Dhaka','salary_range'=>'Negotiable','starting_date'=>'25-06-2017','ending_date'=>'25-07-2017','image'=>''],
 
             
             ['user_id'=>'28' , 'jobcategory_id'=>'9','company_name'=>'Monno Medical College and Hospital','job_post'=>'Jr. Staff Nurse','job_description'=>'N/A','job_nature'=>'Full-time','educational_requirements'=>'Diploma Nursing from any Govt. Nursing/ Private College/ Institute with at least 1 year practical experience will be preferred.','experience'=>'At least 1 year(s)
The applicants should have experience in the following area(s):
Nurse
The applicants should have experience in the following business area(s):
Hospital','job_location'=>'Manikganj','salary_range'=>'Negotiable','starting_date'=>'07-06-2017','ending_date'=>'07-07-2017','image'=>''],
  
             ['user_id'=>'29' , 'jobcategory_id'=>'9','company_name'=>'Gentry Pharmaceuticals Limited','job_post'=>'Field Manager (Animal Health Division)','job_description'=>'Applicant should have vast experience in Marketing, Sales & Payment Collections of any assigned territory for Animal Health Products.
Achieving total level value & volume target and ensuring optimum products distribution & visibility
Performing primary sales order management and verifying secondary sales
Preparing periodic sales report and analyzing performance against program to determine their effectiveness
Monitoring distributors stock, ensuring timely payment from distributors and receiving claim adjustment
Ensuring coverage and availability as per the norms & resolving problem at immediate subordinate & out-level
Training the Territory Marketing Sales Officers in their daily activities and communicating all the promotional schemes to the subordinates, retailers and distributors
Achieving sales target by implementing strategic marketing plan.
Supervising & guiding marketing field forces to keep them disciplined & motivated.
Monitoring the sales performance of the field forces daily & evaluating the achievements on weekly, monthly basis & submit monthly report.
Monitoring competitors activities.
Ensure growth of institutional sales, tender business for business growth.
Visit doctors, Poultry, Dairy & Fish Farms as well as customers regularly to monitor prescription share.
Carry out any other responsibilities assigned by the management.','job_nature'=>'Full-time','educational_requirements'=>'Graduate or Masters from any recognized university.
Poultry Science Background & DVM applicants will be given preference','experience'=>'3 to 5 year(s)','job_location'=>'Anywhere in Bangladesh','salary_range'=>'Negotiable','starting_date'=>'20-06-2017','ending_date'=>'20-07-2017','image'=>''],

             ['user_id'=>'28' , 'jobcategory_id'=>'9','company_name'=>'Monno Medical College & Hospital (Manikganj)','job_post'=>'Nursing Superintendent/ Deputy Nursing Superintendent','job_description'=>'N/A','job_nature'=>'Full-time','educational_requirements'=>'Retd Matron/ Nursing Superintendent/ Deputy Nursing Superintendent/Deputy Matron, B.Sc Nursing from any Govt. Hospital / Private Institute with at least 5-7 years experience will be preferred.','experience'=>'5 to 7 year(s)
The applicants should have experience in the following business area(s):
Hospital','job_location'=>'Manikganj','salary_range'=>'Negotiable','starting_date'=>'07-06-2017','ending_date'=>'07-07-2017','image'=>''],

             ['user_id'=>'30' , 'jobcategory_id'=>'9','company_name'=>'Eskayef Bangladesh Ltd.','job_post'=>'Market Research Manager','job_description'=>'Selecting the most appropriate research methodology and techniques
Conducting countrywide prescription survey through Research Team
Designing qualitative and quantitative research plans for products
Interpreting data, writing reports and making actionable recommendations Research Manager will closely work with Marketing and
Sales teams for ensuring the successful execution of the Marketing strategies and evaluating field force excellence.','job_nature'=>'Full-time','educational_requirements'=>'Bachelors or advanced degree in business, mathematics or statistics','experience'=>'5 to 7 year(s)','job_location'=>'Dhaka','salary_range'=>'Negotiable','starting_date'=>'08-06-2017','ending_date'=>'08-07-2017','image'=>''],

             ['user_id'=>'28' , 'jobcategory_id'=>'9','company_name'=>'Monno Medical College & Hospital (Manikganj)','job_post'=>'Sr. Staff Nurse','job_description'=>'N/A','job_nature'=>'Full-time','educational_requirements'=>'B.Sc Nursing/ Diploma Nursing from any Govt. Nursing/ Private College with at least 1-2 years practical experience will be preferred.','experience'=>'1 to 2 year(s)
The applicants should have experience in the following area(s):
Nurse
The applicants should have experience in the following business area(s):
Hospital','job_location'=>'Manikganj','salary_range'=>'Negotiable','starting_date'=>'07-06-2017','ending_date'=>'07-07-2017','image'=>''],

             ['user_id'=>'31' , 'jobcategory_id'=>'9','company_name'=>'BRAC International','job_post'=>'Programme Specialist, Health','job_description'=>'The purpose of this role is to assist country team in resource mobilization for health programmes in different BRAC International countries; review programme and donor reports, grant monitoring, assist in concept note and proposal development process, support and maintain liaison with BI countries health teams, HO, BRAC Health, Nutrition and Population Programme (HNPP), WASH and affiliates.
Assist in resource mobilization for health programmes in different countries of BRAC International.
Project opportunity search, project proposal drafting/review, and design for the BI countries.
Cross country coordination and provide health program related all technical support with the consultation of supervisor such as strategy, specific/technical guidelines, checklist formulation.
Programme progress monitoring and quality check through coordination.
Support country teams in preparing donor reports.
Follow up programme implementation and burn rate with the country teams as well as Finance team of BRAC International Head Office.
Country report analysis and provide necessary feedback.
Provide other necessary technical support to country teams.
Coordination with BRAC affiliates, HNPP& WASH.
Support BRAC international countries in preparing their health sector strategic plan.','job_nature'=>'Full-time','educational_requirements'=>'MBBS or University degree in Medicine or a related field, Masters in Nutrition/ Biological Science concentrating on Public Health, Health Policy, Global health, Nutrition.
Certificate on Epidemiology & Biostatistics and diploma/certificate on Program Management will also be preferred.','experience'=>'At least 5 year(s)','job_location'=>'Dhaka','salary_range'=>'Negotiable','starting_date'=>'02-06-2017','ending_date'=>'02-07-2017','image'=>''],

             ['user_id'=>'32' , 'jobcategory_id'=>'9','company_name'=>'Synesis IT','job_post'=>'Manager, Mental Health Call Center','job_description'=>'Handling the calls or problems of complex patients or enquiries or calls that need psychiatrists intervention;
Developing objectives and managing the daily running of the call center and implementing the strategies and operations; ;
Conducting effective resource planning to maximize the productivity of resources (People, Technology etc.);
Play major role in building network with mental health professionals and organizations of the country;
Carrying out needs assessments, performance reviews and cost/benefit analysis;
Assume responsibility of budgeting and tracking expenses;
Coordinating staff recruitment, coach and provide training to personnel to maintain high customer service standards;
Organizing staffing, including shift patterns and the number of staff required to meet demand;
Setting and meeting performance targets for speed, efficiency and quality;
Monitoring random calls to improve quality, minimize errors and track operative performance.
Evaluate performance with key metrics (accuracy, call-waiting time etc.
Maintaining up-to-date knowledge of industry developments and involvement in networks;
Recording statistics, user rates and the performance levels of the call center and preparing reports for different departments or upper management;','job_nature'=>'Full-time','educational_requirements'=>'Must have MD in Psychiatry;','experience'=>'3 to 5 year(s)','job_location'=>'Dhaka','salary_range'=>'Negotiable','starting_date'=>'20-06-2017','ending_date'=>'20-07-2017','image'=>''],

             ['user_id'=>'32' , 'jobcategory_id'=>'9','company_name'=>'Popular Pharmaceuticals Ltd.','job_post'=>'Brand Executive (Agrovet)','job_description'=>'Develop & implement marketing plan and take corrective action as per market feedback;
Develop & Allocate promotional plan, program and materials;
Upkeep different blockbuster information and new pharmaceutical molecules;
Benchmark competitors activities by SWOT analysis;
Train field colleagues on assigned products;
Develop Field Force in terms of product knowledge and detailing skills;
Management of Promotional tools and materials;
Review Sales performance analysis;
Support achievement of organizational plan;
Conduct monthly meeting, CME etc.
Visit key opinion leaders and field colleagues frequently to boost-up business growth.','job_nature'=>'Full-time','educational_requirements'=>'DVM (Doctor of Veterinary Medicine), Preferably MS in Pharmacology','experience'=>'1 to 2 year(s)','job_location'=>'Dhaka Division','salary_range'=>'Negotiable','starting_date'=>'03-06-2017','ending_date'=>'03-07-2017','image'=>''],

             ['user_id'=>'33' , 'jobcategory_id'=>'9','company_name'=>'SPIE Oil & Gas Services (Thailand)','job_post'=>'Chemist','job_description'=>'Analytical Laboratory services-
Collect water samples from water tanks sample points, Environmental discharge water from discharge point.
Perform tank water and Environmental discharge water analysis.
Collect all drinking and supply water for microbiological tests and conduct microbiological analysis.
Collect composite gas & condensate samples by programmable auto sampler.
Collect Glycol samples and conduct analysis.
Equipment Handling and troubleshooting-
Record the equipment utilization log.
Record and maintain cylinder pressure status before and after use.
Calibrate pH and Conductivity meter prior to each analysis and record for QA/QC documentation.
Report Supervisor for the equipment malfunction and breakdown.
Development-
Read active methods, OP and analytical procedures as mentioned in ASTM & APHA.
Read instrument manuals to operate instrument and troubleshooting.
Communicate with operational personnel to learn the process plant.
HES and Compliance-
Check Laboratory Safety equipment daily and maintain log sheet to confirm all are functioning.
Perform Housekeeping to ensure safe work practices according to General Laboratory safety rules.
Read MSDS for Safe Handling of Chemicals.','job_nature'=>'Full-time','educational_requirements'=>'Graduate in Chemistry/ Environmental Science from any university/ College','experience'=>'1 to 4 year(s)','job_location'=>'Sylhet Division','salary_range'=>'Negotiable','starting_date'=>'08-06-2017','ending_date'=>'08-07-2017','image'=>''],

             ['user_id'=>'34' , 'jobcategory_id'=>'9','company_name'=>'ARGON DENIMS LIMITED','job_post'=>'Chemical In-charge','job_description'=>'Look After Chemical store.
Entry & Update Chemical Register
Daily, Monthly & Yearly Chemical Report.
Prepare Chemical related All documents according to Company Requirement
Any Assign Duty by Department Head','job_nature'=>'Full-time','educational_requirements'=>'At Least Graduation
Data Entry (As per warehouse Category)','experience'=>'3 to 5 year(s)','job_location'=>'Gazipur','salary_range'=>'Negotiable','starting_date'=>'05-06-2-17','ending_date'=>'05-07-2017','image'=>''],

             ['user_id'=>'35' , 'jobcategory_id'=>'9','company_name'=>'Royalton Lacquer Coating','job_post'=>'Chemist','job_description'=>'Responsible for all Quality Control/Quality Assuramce process.
Responsible for Raw material, Packing material &Finshied goods check.
Strategic planning and report to authority
Any other task assigned by Management
Must Have the experience in Paints industry/ Wood burnish manufacturing industry.','job_nature'=>'Full-time','educational_requirements'=>'Minimum B.Sc. in Chemistry','experience'=>'5 to 6 year(s)
The applicants should have experience in the following area(s):
Production','job_location'=>'Dhaka Division','salary_range'=>'Negotiable','starting_date'=>'18-06-2017','ending_date'=>'18-07-2017','image'=>'']
    
                          
		);

		// Uncomment the below to run the seeder
		DB::table('job')->insert($jobs);
		
	}

}
