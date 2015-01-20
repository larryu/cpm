<?php

class ModulesTableSeeder extends Seeder 
{

	public function run()
	{
		$modules = array(
			['name' => 'Softwareentwicklung I', 'short' => 'InfB-SE 1',	'name_eng' => 'Software Development I', 'exam_type' => 0, 'credits' => 6, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Softwareentwicklung II', 'short' => 'InfB-SE 2',	'name_eng' => 'Software Development II', 'exam_type' => 0, 'credits' => 6, 'department_id' => 1, 'rotation_id' => 3, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Softwareentwicklung III - Funktionale Programmierung', 'short' => 'InfB-SE 3/FP',	'name_eng' => 'Software Development III - Functional Programming', 'exam_type' => 0, 'credits' => 6, 'department_id' => 1, 'rotation_id' => 3, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Softwareentwicklung III - Logikprogrammierung', 'short' => 'InfB-SE 3/LP',	'name_eng' => 'Software Development III - Logic Programming', 'exam_type' => 0, 'credits' => 6, 'department_id' => 1, 'rotation_id' => 3, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Formale Grundlagen der Informatik I', 'short' => 'InfB-FGI 1',	'name_eng' => 'Fundamentals of Informatics I', 'exam_type' => 0, 'credits' => 9, 'department_id' => 1, 'rotation_id' => 3, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Formale Grundlagen der Informatik II', 'short' => 'InfB-FGI 2',	'name_eng' => 'Fundamentals of Informatics II', 'exam_type' => 0, 'credits' => 9, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Seminar', 'short' => 'InfB-Sem',	'name_eng' => 'Informatic Seminar', 'exam_type' => 3, 'credits' => 3, 'department_id' => 1, 'rotation_id' => 1, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Interaktionsdesign', 'short' => 'InfB-ID',	'name_eng' => 'Interaction Design', 'exam_type' => 0, 'credits' => 9, 'department_id' => 1, 'rotation_id' => 3, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Informatik im Kontext', 'short' => 'InfB-IKON',	'name_eng' => 'Informatic in Context', 'exam_type' => 0, 'credits' => 6, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Grundlagen der Wirtschaftsinformatik für WiInf-Studierende', 'short' => 'WiWi-BA-WI-GWI',	'name_eng' => 'Basics of Information Systems', 'exam_type' => 0, 'credits' => 6, 'department_id' => 2, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Grundlagen der Systemsoftware', 'short' => 'InfB-GSS',	'name_eng' => 'Basics of System Software', 'exam_type' => 0, 'credits' => 9, 'department_id' => 1, 'rotation_id' => 3, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Projekt', 'short' => 'InfB-Proj',	'name_eng' => 'Project', 'exam_type' => 3, 'credits' => 9, 'department_id' => 1, 'rotation_id' => 1, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Praktikum', 'short' => 'InfB-Prak',	'name_eng' => 'Practical Course', 'exam_type' => 3, 'credits' => 6, 'department_id' => 1, 'rotation_id' => 1, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Grundlagen der Wissensverarbeitung', 'short' => 'InfB-GWV',	'name_eng' => 'Basics of Knowledge Processing', 'exam_type' => 2, 'credits' => 9, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Grundlagen von Datenbanken', 'short' => 'InfB-GDB',	'name_eng' => 'Basics of Databases', 'exam_type' => 0, 'credits' => 6, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Algorithmen und Datenstrukturen', 'short' => 'InfB-AD',	'name_eng' => 'Algorithm and Data Structures', 'exam_type' => 0, 'credits' => 6, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Rechnerstrukturen', 'short' => 'InfB-RS',	'name_eng' => 'Computer Structures', 'exam_type' => 0, 'credits' => 9, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Proseminar', 'short' => 'InfB-Pros',	'name_eng' => 'Proseminar', 'exam_type' => 3, 'credits' => 3, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Proseminar CiS-Biochemie', 'short' => 'InfB-Pros/CiS/BC',	'name_eng' => 'Proseminar CiS-Biochemistry', 'exam_type' => 3, 'credits' => 3, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Softwareentwicklungspraktikum', 'short' => 'InfB-Prak/SSE',	'name_eng' => 'Software Engineering Practical Course', 'exam_type' => 0, 'credits' => 6, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Projekt Mensch-Computer-Interaktion', 'short' => 'InfB-Proj/MCI',	'name_eng' => 'Project Human-Computer-Interaction', 'exam_type' => 0, 'credits' => 9, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Projektmanagement', 'short' => 'InfB-PM',	'name_eng' => 'Project Management', 'exam_type' => 0, 'credits' => 3, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Recht der Informationwirtschaft', 'short' => 'InfB-RIW',	'name_eng' => 'Law of Informations Systems', 'exam_type' => 0, 'credits' => 3, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Datenkommunikation und Rechnernetze', 'short' => 'InfB-DKR',	'name_eng' => 'Data Communication and Computer Networks', 'exam_type' => 0, 'credits' => 9, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Hochleistungsrechnen', 'short' => 'InfB-HLR',	'name_eng' => '- Fehlt! -', 'exam_type' => 0, 'credits' => 9, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Mathematik III für Studierende der Bachelor-Studiengänge', 'short' => 'MATH3-CiS',	'name_eng' => 'Mathematic III', 'exam_type' => 0, 'credits' => 6, 'department_id' => 3, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Orientierungseinheit', 'short' => 'OEInf',	'name_eng' => 'Orientation Unit', 'exam_type' => 0, 'credits' => 6, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'OrientierungseinheitWI', 'short' => 'OEWI',	'name_eng' => 'Orientation Unit IS', 'exam_type' => 0, 'credits' => 3, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Studienunterstützung (ohne LP-Anrechung)', 'short' => 'StudU',	'name_eng' => 'Study Support', 'exam_type' => 0, 'credits' => 1, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Grundlagen der Sequenzanalyse', 'short' => 'MBI-09',	'name_eng' => 'Fundamentals of Sequenz Analysis', 'exam_type' => 0, 'credits' => 6, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Grundlagen der Strukturanalyse', 'short' => 'MBI-10',	'name_eng' => 'Fundamentals of Structure Analysis', 'exam_type' => 0, 'credits' => 6, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Informationsmanagement', 'short' => 'WiWi-BA-WI-IM',	'name_eng' => 'Information Management', 'exam_type' => 0, 'credits' => 6, 'department_id' => 2, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Grundlagen der Chemieinformatik', 'short' => 'MBI-08',	'name_eng' => 'Fundamentals of Chemistry Informatics', 'exam_type' => 0, 'credits' => 6, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Grundlagen des Rechnungswesens', 'short' => 'WiWi-BA-GRREWE',	'name_eng' => 'Fundamentals of Booking', 'exam_type' => 0, 'credits' => 6, 'department_id' => 2, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Einführung in die Betriebswirtschaftslehre', 'short' => 'WiWi-BA-EBWL',	'name_eng' => 'Introduction to Economics', 'exam_type' => 0, 'credits' => 3, 'department_id' => 2, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Einführung in die Volkswirtschaftslehre', 'short' => 'WiWi-BA-EINVWL',	'name_eng' => 'Introduction to ...', 'exam_type' => 0, 'credits' => 6, 'department_id' => 2, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Wirtschaftsprivatrecht', 'short' => 'WiWi-BA-WIPRE',	'name_eng' => '- Fehlt! -', 'exam_type' => 0, 'credits' => 6, 'department_id' => 2, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Unternehmensführung: Grundlagen des Personalmanagements', 'short' => 'WiWi-BA-UFÜ 2',	'name_eng' => '- Fehlt! -', 'exam_type' => 0, 'credits' => 6, 'department_id' => 2, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Bilanzen', 'short' => 'WiWi-BA-BILANZ',	'name_eng' => '- Fehlt! -', 'exam_type' => 0, 'credits' => 6, 'department_id' => 2, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Investition', 'short' => 'WiWi-BA-INVEST',	'name_eng' => '- Fehlt! -', 'exam_type' => 0, 'credits' => 6, 'department_id' => 2, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Angewandte BioInformatik: Sequenzen', 'short' => 'MBI-06',	'name_eng' => '- Fehlt! -', 'exam_type' => 0, 'credits' => 6, 'department_id' => 2, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Formale Grundlagen der Informatik III', 'short' => 'InfM-FGI 3',	'name_eng' => 'Fundamentals of Informatics III', 'exam_type' => 1, 'credits' => 9, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Interaktives Visuellen Computing', 'short' => 'InfM-IVC',	'name_eng' => 'Interactive Visual Computing', 'exam_type' => 0, 'credits' => 9, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Verteilte Systeme und Informationssicherheit', 'short' => 'InfM-VIS',	'name_eng' => '- Fehlt! -', 'exam_type' => 0, 'credits' => 9, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Algorithmik', 'short' => 'InfM-ALG',	'name_eng' => '- Fehlt! -', 'exam_type' => 0, 'credits' => 9, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Multidimensionale und Multimodale Signale', 'short' => 'InfM-MMS',	'name_eng' => '- Fehlt! -', 'exam_type' => 0, 'credits' => 9, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Empirische Softwaretechnik', 'short' => 'InfM-ESE',	'name_eng' => 'Empirical Software Engineering', 'exam_type' => 0, 'credits' => 9, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Sicherheit von komplexen Informatik-Systemen', 'short' => 'InfM-SKI',	'name_eng' => '- Fehlt! -', 'exam_type' => 1, 'credits' => 6, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Leistungs-/Zuverlässigkeitsbewertung und Traffic-Engineering', 'short' => 'InfM-LTR',	'name_eng' => '- Fehlt! -', 'exam_type' => 1, 'credits' => 6, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Bildverarbeitung I', 'short' => 'InfM-BV 1',	'name_eng' => 'Image Processing I', 'exam_type' => 0, 'credits' => 6, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Intelligente Roboter', 'short' => 'InfM-IR',	'name_eng' => '- Fehlt! -', 'exam_type' => 1, 'credits' => 6, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Bio-Inspired Artificial Intelligence', 'short' => 'InfM-BAI',	'name_eng' => 'Bio-Inspired Artificial Intelligence', 'exam_type' => 1, 'credits' => 6, 'department_id' => 1, 'rotation_id' => 2, 'language' => 1, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Softwarearchitektur', 'short' => 'InfM-SWA',	'name_eng' => 'Software Architecture', 'exam_type' => 1, 'credits' => 6, 'department_id' => 1, 'rotation_id' => 2, 'language' => 1, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Systemanalytische Modellierungsmethoden und -werkzeuge', 'short' => 'InfM-SAMW',	'name_eng' => '- Fehlt! -', 'exam_type' => 1, 'credits' => 6, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Enterprise Architecture Management', 'short' => 'InfM-EAM',	'name_eng' => 'Enterprise Architecture Management', 'exam_type' => 1, 'credits' => 6, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Interaktive Systeme', 'short' => 'InfM-IS',	'name_eng' => 'Interactive Systems', 'exam_type' => 1, 'credits' => 6, 'department_id' => 1, 'rotation_id' => 2, 'language' => 1, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Modellbasierte Softwareentwicklung', 'short' => 'InfM-MBSE',	'name_eng' => 'Model-based Software Development', 'exam_type' => 1, 'credits' => 6, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Projekt', 'short' => 'InfM-Proj',	'name_eng' => 'Project', 'exam_type' => 2, 'credits' => 9, 'department_id' => 1, 'rotation_id' => 1, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Sicherheit und Datenschutz', 'short' => 'InfM-SuD/LA',	'name_eng' => '- Fehlt! -', 'exam_type' => 0, 'credits' => 3, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Research Methods', 'short' => 'InfM-RM',	'name_eng' => 'Research Methods', 'exam_type' => 1, 'credits' => 9, 'department_id' => 1, 'rotation_id' => 2, 'language' => 1, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Projekt', 'short' => 'WI-MA-P',	'name_eng' => 'Project', 'exam_type' => 2, 'credits' => 8, 'department_id' => 1, 'rotation_id' => 1, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Einführung in die Praxiselemente', 'short' => 'ITMC-EP',	'name_eng' => '- Fehlt! -', 'exam_type' => 4, 'credits' => 3, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Consultingmethoden', 'short' => 'ITMC-CM',	'name_eng' => 'Consulting Methods', 'exam_type' => 1, 'credits' => 3, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'ITMC-Projekt', 'short' => 'ITMC-Projekt',	'name_eng' => 'ITMC-Project', 'exam_type' => 2, 'credits' => 12, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'IT-Innovations-Forum 1', 'short' => 'ITMC-IF1',	'name_eng' => '- Fehlt! -', 'exam_type' => 2, 'credits' => 3, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'IT-Innovationen und -Transfer', 'short' => 'ITMC-ITIT',	'name_eng' => 'IT Innovation and Transfer', 'exam_type' => 0, 'credits' => 9, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Integriertes Anwendungsfach Robotik 1', 'short' => 'InfB-ROB 1',	'name_eng' => '- Fehlt! -', 'exam_type' => 0, 'credits' => 9, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Informationsmanagement im Verkehr', 'short' => 'WiWi-MA-WI-IMV',	'name_eng' => '- Fehlt! -', 'exam_type' => 0, 'credits' => 1, 'department_id' => 2, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Computergestützte Planung', 'short' => 'WiWi-MA-WI-CGP',	'name_eng' => '- Fehlt! -', 'exam_type' => 0, 'credits' => 3, 'department_id' => 2, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Entscheidungsunterstützung durch Modellierung, Optimierung und Analyse', 'short' => 'WiWi-MA-METH 2',	'name_eng' => '- Fehlt! -', 'exam_type' => 0, 'credits' => 3, 'department_id' => 2, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Vertiefung zum Operations Management', 'short' => 'WiWi-MA-OSCM',	'name_eng' => '- Fehlt! -', 'exam_type' => 0, 'credits' => 3, 'department_id' => 2, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Advanced Planning im SCM: Konzepte, Modelle, Anwendungen und Rechnerübungen', 'short' => 'WiWi-MA-OSCM 4',	'name_eng' => '- Fehlt! -', 'exam_type' => 0, 'credits' => 3, 'department_id' => 2, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Business Process Management', 'short' => 'WiWi-MA-WI-BPM',	'name_eng' => 'Business Process Management', 'exam_type' => 0, 'credits' => 6, 'department_id' => 2, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Programmierung in der Bioinformatik', 'short' => 'MBI-03',	'name_eng' => '- Fehlt! -', 'exam_type' => 0, 'credits' => 6, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Angewandet Bioinformatik: Strukturen', 'short' => 'MBI-07',	'name_eng' => '- Fehlt! -', 'exam_type' => 0, 'credits' => 6, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Seminar: Genominformatik', 'short' => 'MBI-14-1',	'name_eng' => '- Fehlt! -', 'exam_type' => 0, 'credits' => 3, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Seminar: Modellierung von Biomolekülen', 'short' => 'MBI-14-2',	'name_eng' => '- Fehlt! -', 'exam_type' => 2, 'credits' => 3, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Seminar: Chemieinformatik/Wirkstoffentwurf', 'short' => 'MBI-14-3',	'name_eng' => '- Fehlt! -', 'exam_type' => 2, 'credits' => 3, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Projekt: Genominformatik', 'short' => 'MBI-15-1',	'name_eng' => '- Fehlt! -', 'exam_type' => 2, 'credits' => 9, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Projekt: Strukturelle Bioinformatik', 'short' => 'MBI-15-2',	'name_eng' => '- Fehlt! -', 'exam_type' => 2, 'credits' => 9, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Projekt: Chemieinformatik/Wirkstoffentwurf', 'short' => 'MBI-15-3',	'name_eng' => '- Fehlt! -', 'exam_type' => 2, 'credits' => 9, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Einstieg in die Informatik/Programmierung', 'short' => 'MBI-X1',	'name_eng' => '- Fehlt! -', 'exam_type' => 0, 'credits' => 6, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Einstieg in die Chemie/Lebenswissenschaft', 'short' => 'MBI-X2',	'name_eng' => '- Fehlt! -', 'exam_type' => 0, 'credits' => 6, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Angewandet Bioinformatik II (ABI)', 'short' => 'MBI-18-1',	'name_eng' => '- Fehlt! -', 'exam_type' => 0, 'credits' => 9, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Wissensverarbeitung', 'short' => 'InfM-WV',	'name_eng' => '- Fehlt! -', 'exam_type' => 0, 'credits' => 6, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Business Models and IT', 'short' => 'ITMC-BMIT',	'name_eng' => 'Business Models and IT', 'exam_type' => 0, 'credits' => 3, 'department_id' => 1, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Wirtschaftsinformatik-Grundlagen 1 (M.Sc.)', 'short' => 'WI-MA-G1',	'name_eng' => '- Fehlt! -', 'exam_type' => 0, 'credits' => 6, 'department_id' => 2, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Wirtschaftsinformatik-Grundlagen 2 (M.Sc.)', 'short' => 'WI-MA-G2',	'name_eng' => '- Fehlt! -', 'exam_type' => 0, 'credits' => 6, 'department_id' => 2, 'rotation_id' => 2, 'language' => 0, 'degree_id' => 2, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Oberseminar', 'short' => 'Inf-OS',	'name_eng' => '- Fehlt! -', 'exam_type' => 0, 'credits' => 3, 'department_id' => 1, 'rotation_id' => 1, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Mathematik für Studierende der Informatik (Diskrete Mathematik)', 'short' => 'MATH1-Inf (DM)',	'name_eng' => '- Fehlt! -', 'exam_type' => 0, 'credits' => 9, 'department_id' => 3, 'rotation_id' => 1, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['name' => 'Mathematik für Studierende der Informatik (Analysis und Lineare Algebra)', 'short' => 'MATH1-Inf (ALA)',	'name_eng' => '- Fehlt! -', 'exam_type' => 0, 'credits' => 9, 'department_id' => 3, 'rotation_id' => 3, 'language' => 0, 'degree_id' => 1, 'individual_courses' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
		);
		
		// Uncomment the below to run the seeder
		DB::table('modules')->insert($modules);
	}
}
