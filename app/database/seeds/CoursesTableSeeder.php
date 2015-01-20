<?php
use Illuminate\Database\Seeder;
class CoursesTableSeeder extends Seeder
{
	public function run()
	{
		$courses = array(
			['name' => 'Softwareentwicklung I', 'name_eng' => 'Software Development I', 'course_number' => '64-000', 'coursetype_id' => 1, 'module_id' => 1, 'participants' => 550, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'Softwareentwicklung I', 'name_eng' => 'Software Development I', 'course_number' => '64-001', 'coursetype_id' => 4, 'module_id' => 1, 'participants' => 20, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'Softwareentwicklung II', 'name_eng' => 'Software Development II', 'course_number' => '64-010', 'coursetype_id' => 1, 'module_id' => 2, 'participants' => 550, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'Übungen zu Softwareentwicklung II', 'name_eng' => 'Excercises for Software Development II', 'course_number' => '64-012', 'coursetype_id' => 4, 'module_id' => 2, 'participants' => 60, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'Grundlagen der Mensch-Computer-Interaktion', 'name_eng' => 'Fundamentals of Human-Computer-Interaktion', 'course_number' => '64-030', 'coursetype_id' => 1, 'module_id' => 9, 'participants' => 470, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'Informatiksysteme in Organisationen', 'name_eng' => 'Information Systems in Organizations', 'course_number' => '64-031', 'coursetype_id' => 1, 'module_id' => 9, 'participants' => 470, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'Softwareentwicklung III: Funktionale Programmierung', 'name_eng' => '- Fehlt! -', 'course_number' => '64-020', 'coursetype_id' => 1, 'module_id' => 3, 'participants' => 240, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'Übung zu Funktionale Programmierung', 'name_eng' => '- Fehlt! -', 'course_number' => '64-022', 'coursetype_id' => 4, 'module_id' => 3, 'participants' => 20, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'Softwareentwicklung III: Logikprogrammierung', 'name_eng' => '- Fehlt! -', 'course_number' => '64-021', 'coursetype_id' => 1, 'module_id' => 4, 'participants' => 90, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'Übung zu Logikprogrammierung', 'name_eng' => '- Fehlt! -', 'course_number' => '64-023', 'coursetype_id' => 4, 'module_id' => 4, 'participants' => 20, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'Algorithmen und Datenstrukuren', 'name_eng' => '- Fehlt! -', 'course_number' => '64-070', 'coursetype_id' => 1, 'module_id' => 16, 'participants' => 315, 'language' => 0, 'semester_periods_per_week' => 3, 'department_id' => 1],
			['name' => 'Übung Algorithmen und Datenstrukturen', 'name_eng' => '- Fehlt! -', 'course_number' => '64-071', 'coursetype_id' => 4, 'module_id' => 16, 'participants' => 15, 'language' => 0, 'semester_periods_per_week' => 1, 'department_id' => 1],
			['name' => 'Grundlagen von Datenbanken', 'name_eng' => '- Fehlt! -', 'course_number' => '64-080', 'coursetype_id' => 1, 'module_id' => 15, 'participants' => 340, 'language' => 0, 'semester_periods_per_week' => 3, 'department_id' => 1],
			['name' => 'Übung Grundlagen von Datenbanken', 'name_eng' => '- Fehlt! -', 'course_number' => '64-081', 'coursetype_id' => 4, 'module_id' => 15, 'participants' => 17, 'language' => 0, 'semester_periods_per_week' => 1, 'department_id' => 1],
			['name' => 'Rechnerstrukturen', 'name_eng' => '- Fehlt! -', 'course_number' => '64-040', 'coursetype_id' => 1, 'module_id' => 17, 'participants' => 280, 'language' => 0, 'semester_periods_per_week' => 4, 'department_id' => 1],
			['name' => 'Übung zu Rechnerstrukturen', 'name_eng' => '- Fehlt! -', 'course_number' => '64-041', 'coursetype_id' => 4, 'module_id' => 17, 'participants' => 17, 'language' => 0, 'semester_periods_per_week' => 1, 'department_id' => 1],
			['name' => 'Rechnerstrukturen', 'name_eng' => '- Fehlt! -', 'course_number' => '64-042', 'coursetype_id' => 7, 'module_id' => 17, 'participants' => 24, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'Formale Grundlagen II', 'name_eng' => '- Fehlt! -', 'course_number' => '64-060', 'coursetype_id' => 1, 'module_id' => 6, 'participants' => 150, 'language' => 0, 'semester_periods_per_week' => 4, 'department_id' => 1],
			['name' => 'Übung zu Formale Grundlagen der Informatik II', 'name_eng' => '- Fehlt! -', 'course_number' => '64-061', 'coursetype_id' => 4, 'module_id' => 6, 'participants' => 14, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'Bachelor Proseminar', 'name_eng' => '- Fehlt! -', 'course_number' => '64-120', 'coursetype_id' => 5, 'module_id' => 18, 'participants' => 20, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'CiS-Proseminar Biochemie', 'name_eng' => '- Fehlt! -', 'course_number' => '67-251', 'coursetype_id' => 5, 'module_id' => 19, 'participants' => 20, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'Bachelor Praktikum', 'name_eng' => '- Fehlt! -', 'course_number' => '64-140', 'coursetype_id' => 7, 'module_id' => 13, 'participants' => 20, 'language' => 0, 'semester_periods_per_week' => 4, 'department_id' => 1],
			['name' => 'Bachelor Seminar', 'name_eng' => '- Fehlt! -', 'course_number' => '64-160', 'coursetype_id' => 2, 'module_id' => 7, 'participants' => 20, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'Bachelor Projekt', 'name_eng' => '- Fehlt! -', 'course_number' => '64-181', 'coursetype_id' => 6, 'module_id' => 12, 'participants' => 12, 'language' => 0, 'semester_periods_per_week' => 6, 'department_id' => 1],
			['name' => 'Projektmanagement', 'name_eng' => '- Fehlt! -', 'course_number' => '64-100', 'coursetype_id' => 1, 'module_id' => 22, 'participants' => 170, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'Datenschutz in der Informationsgesellschaft', 'name_eng' => '- Fehlt! -', 'course_number' => '64-205', 'coursetype_id' => 1, 'module_id' => 23, 'participants' => 45, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'Datenkommunikation und Rechnernetze (DKR)', 'name_eng' => '- Fehlt! -', 'course_number' => '64-230', 'coursetype_id' => 1, 'module_id' => 24, 'participants' => 40, 'language' => 0, 'semester_periods_per_week' => 4, 'department_id' => 1],
			['name' => 'Übung zu Datenkommunikation und Rechnernetze', 'name_eng' => '- Fehlt! -', 'course_number' => '64-231', 'coursetype_id' => 4, 'module_id' => 24, 'participants' => 20, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'Wissensbasierte Systeme', 'name_eng' => '- Fehlt! -', 'course_number' => '64-240', 'coursetype_id' => 1, 'module_id' => 14, 'participants' => 80, 'language' => 0, 'semester_periods_per_week' => 4, 'department_id' => 1],
			['name' => 'Grundlagen der Wissenverarbeitung', 'name_eng' => '- Fehlt! -', 'course_number' => '64-242', 'coursetype_id' => 7, 'module_id' => 14, 'participants' => 20, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'Hochleistungsrechnen', 'name_eng' => '- Fehlt! -', 'course_number' => '64-253', 'coursetype_id' => 1, 'module_id' => 25, 'participants' => 45, 'language' => 0, 'semester_periods_per_week' => 4, 'department_id' => 1],
			['name' => 'Übung zu Hochleistungsrechnen', 'name_eng' => '- Fehlt! -', 'course_number' => '64-254', 'coursetype_id' => 4, 'module_id' => 25, 'participants' => 23, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'Anleitung Übung zu Mathematik III für Studierende der Bachelor-Studiengänge Geophysik/Ozeanographie, Meteorologie und Physik', 'name_eng' => '- Fehlt! -', 'course_number' => '65-813', 'coursetype_id' => 10, 'module_id' => 26, 'participants' => 40, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'Tutorium zu Mathematik III für Studierende der Bachelor-Studiengänge Geophysik/Ozeanographie, Meteorologie und Physik', 'name_eng' => '- Fehlt! -', 'course_number' => '65-814', 'coursetype_id' => 9, 'module_id' => 26, 'participants' => 20, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'OE-Informatik', 'name_eng' => '- Fehlt! -', 'course_number' => '64-900', 'coursetype_id' => 11, 'module_id' => 27, 'participants' => 20, 'language' => 0, 'semester_periods_per_week' => 4, 'department_id' => 1],
			['name' => 'OE Wirtschaftsinformatik', 'name_eng' => '- Fehlt! -', 'course_number' => '64-901', 'coursetype_id' => 11, 'module_id' => 28, 'participants' => 20, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'Vorkurs (Diskrete) Mathematik', 'name_eng' => '- Fehlt! -', 'course_number' => '64-', 'coursetype_id' => 11, 'module_id' => 29, 'participants' => 20, 'language' => 0, 'semester_periods_per_week' => 1, 'department_id' => 1],
			['name' => 'Repetitorium zu FGI 2', 'name_eng' => '- Fehlt! -', 'course_number' => '64-063', 'coursetype_id' => 11, 'module_id' => 29, 'participants' => 20, 'language' => 0, 'semester_periods_per_week' => 1, 'department_id' => 1],
			['name' => 'Frauen-Tutorium zu FGI 2', 'name_eng' => '- Fehlt! -', 'course_number' => '64-065', 'coursetype_id' => 11, 'module_id' => 29, 'participants' => 20, 'language' => 0, 'semester_periods_per_week' => 1, 'department_id' => 1],
			['name' => 'Grundlagen der Sequenzanalyse (GSA)', 'name_eng' => '- Fehlt! -', 'course_number' => '67-110', 'coursetype_id' => 1, 'module_id' => 30, 'participants' => 20, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'Übungen zu Grundlagen der Sequenzanalyse', 'name_eng' => '- Fehlt! -', 'course_number' => '67-111', 'coursetype_id' => 4, 'module_id' => 30, 'participants' => 20, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'Grundlagen der Strukturanalyse (GST)', 'name_eng' => '- Fehlt! -', 'course_number' => '67-112', 'coursetype_id' => 1, 'module_id' => 31, 'participants' => 20, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'Übungen zu Grundlagen der Strukturanalyse', 'name_eng' => '- Fehlt! -', 'course_number' => '67-113', 'coursetype_id' => 4, 'module_id' => 31, 'participants' => 20, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'Informationsmanagement', 'name_eng' => '- Fehlt! -', 'course_number' => '21-21.400', 'coursetype_id' => 8, 'module_id' => 32, 'participants' => 170, 'language' => 0, 'semester_periods_per_week' => 4, 'department_id' => 1],
			['name' => 'Grundlagen der Chemieinformatik (GCI)', 'name_eng' => '- Fehlt! -', 'course_number' => '67-114', 'coursetype_id' => 1, 'module_id' => 33, 'participants' => 18, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'Grundlagen der Chemieinformatik', 'name_eng' => '- Fehlt! -', 'course_number' => '67-115', 'coursetype_id' => 4, 'module_id' => 33, 'participants' => 18, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'Grundlagen der Wirtschaftsinformatik für WiInf-Studierende', 'name_eng' => '- Fehlt! -', 'course_number' => '21-10.300', 'coursetype_id' => 8, 'module_id' => 10, 'participants' => 150, 'language' => 0, 'semester_periods_per_week' => 4, 'department_id' => 1],
			['name' => 'Grundlagen des Rechnungswesens', 'name_eng' => '- Fehlt! -', 'course_number' => '21-10.010', 'coursetype_id' => 8, 'module_id' => 34, 'participants' => 564, 'language' => 0, 'semester_periods_per_week' => 4, 'department_id' => 1],
			['name' => 'Einführung in die Betriebswirtschaftslehre', 'name_eng' => '- Fehlt! -', 'course_number' => '21-10.905', 'coursetype_id' => 1, 'module_id' => 35, 'participants' => 310, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'Einführung in die Volkswirtschaftslehre', 'name_eng' => '- Fehlt! -', 'course_number' => '22-10.010', 'coursetype_id' => 8, 'module_id' => 36, 'participants' => 604, 'language' => 0, 'semester_periods_per_week' => 4, 'department_id' => 1],
			['name' => 'Wirtschaftsprivatrecht', 'name_eng' => '- Fehlt! -', 'course_number' => '21-10.030', 'coursetype_id' => 8, 'module_id' => 37, 'participants' => 402, 'language' => 0, 'semester_periods_per_week' => 4, 'department_id' => 1],
			['name' => 'Unternehmensführung II', 'name_eng' => '- Fehlt! -', 'course_number' => '21-10.120', 'coursetype_id' => 8, 'module_id' => 38, 'participants' => 542, 'language' => 0, 'semester_periods_per_week' => 4, 'department_id' => 1],
			['name' => 'Bilanzen', 'name_eng' => '- Fehlt! -', 'course_number' => '21-10.100', 'coursetype_id' => 8, 'module_id' => 39, 'participants' => 475, 'language' => 0, 'semester_periods_per_week' => 4, 'department_id' => 1],
			['name' => 'Investition', 'name_eng' => '- Fehlt! -', 'course_number' => '21-10.110', 'coursetype_id' => 8, 'module_id' => 40, 'participants' => 600, 'language' => 0, 'semester_periods_per_week' => 4, 'department_id' => 1],
			['name' => 'Mathematik I für Studierende der Informatik (Diskrete Mathematik)', 'name_eng' => '- Fehlt! -', 'course_number' => '65-821 (DM)', 'coursetype_id' => 1, 'module_id' => 90, 'participants' => 450, 'language' => 0, 'semester_periods_per_week' => 4, 'department_id' => 1],
			['name' => 'Übungen zu Mathematik I für Studierende der Informatik (Diskrete Mathematik)', 'name_eng' => '- Fehlt! -', 'course_number' => '65-822 (DM)', 'coursetype_id' => 4, 'module_id' => 90, 'participants' => 20, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'Mathematik II für Studierende der Informatik (Analysis und Lineare Algebra)', 'name_eng' => '- Fehlt! -', 'course_number' => '65-821 (ALA)', 'coursetype_id' => 1, 'module_id' => 91, 'participants' => 400, 'language' => 0, 'semester_periods_per_week' => 4, 'department_id' => 1],
			['name' => 'Übungen zu Mathematik II für Studierende der Informatik (Analysis und Lineare Algebra)', 'name_eng' => '- Fehlt! -', 'course_number' => '65-822 (ALA)', 'coursetype_id' => 4, 'module_id' => 91, 'participants' => 20, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'Master Projekt', 'name_eng' => 'Master Project', 'course_number' => '64-450', 'coursetype_id' => 6, 'module_id' => 58, 'participants' => 12, 'language' => 0, 'semester_periods_per_week' => 6, 'department_id' => 1],
			['name' => 'Master Projekt', 'name_eng' => 'Master Project', 'course_number' => '64-451', 'coursetype_id' => 3, 'module_id' => 58, 'participants' => 12, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'IT-Innovationen und -Transfer', 'name_eng' => 'IT Innovation and Transfer', 'course_number' => '64-702', 'coursetype_id' => 1, 'module_id' => 66, 'participants' => 60, 'language' => 0, 'semester_periods_per_week' => 4, 'department_id' => 1],
			['name' => 'IT-Innovationen und -Transfer', 'name_eng' => 'IT Innovation and Transfer', 'course_number' => '64-703', 'coursetype_id' => 4, 'module_id' => 66, 'participants' => 20, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'Formale Grundlagen der Informatik IIIa - Logik', 'name_eng' => 'Fundamentals of Informatics IIIa - Logic', 'course_number' => '64-300', 'coursetype_id' => 1, 'module_id' => 42, 'participants' => 80, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'Formale Grundlagen der Informatik IIIb - Semantik von Programmen', 'name_eng' => 'Fundamentals of Informatics IIIb - Semantics of Programs', 'course_number' => '64-301', 'coursetype_id' => 1, 'module_id' => 42, 'participants' => 80, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'Formale Grundlagen der Informatik III - Logik und Semantik von Programmen', 'name_eng' => 'Fundamentals of Informatics III - Logic and Semantic of Programs', 'course_number' => '64-302', 'coursetype_id' => 2, 'module_id' => 42, 'participants' => 20, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
			['name' => 'IT-Innovations-Forum', 'name_eng' => 'IT Innovation Forum', 'course_number' => '64-700', 'coursetype_id' => 1, 'module_id' => 65, 'participants' => 100, 'language' => 0, 'semester_periods_per_week' => 2, 'department_id' => 1],
		);
		
		DB::table('courses')->insert($courses);
	}
}
