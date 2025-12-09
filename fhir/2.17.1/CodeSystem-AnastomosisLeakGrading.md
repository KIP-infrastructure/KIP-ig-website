# Anastomosis leak grading - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Anastomosis leak grading**

## CodeSystem: Anastomosis leak grading 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/AnastomosisLeakGrading | *Version*:2.17.1 |
| Active as of 2022-08-17 | *Computable Name*:AnastomosisLeakGrading |

 
Anastomosis leak grading 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AnastomoseLaekageGradingering](ValueSet-AnastomoseLaekageGradingering.md)
* [AnastomoseLaekageGraduering](ValueSet-AnastomoseLaekageGraduering.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "AnastomosisLeakGrading",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/AnastomosisLeakGrading",
  "version" : "2.17.1",
  "name" : "AnastomosisLeakGrading",
  "title" : "Anastomosis leak grading",
  "status" : "active",
  "date" : "2022-08-17T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Anastomosis leak grading",
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "grade_a",
      "display" : "Grade A",
      "definition" : "Grad A - Kræver ikke nogen form for aktiv terapeutisk behandling"
    },
    {
      "code" : "grade_b",
      "display" : "Grade B",
      "definition" : "Grad B - Kræver aktiv terapeutisk behandling men ikke re-labaroskopi eller re-laparotomi"
    },
    {
      "code" : "grade_c",
      "display" : "Grade C",
      "definition" : "Grad C - Kræver aktiv terapeutisk behandling med re-labaroskopi eller re-laparotomi"
    }
  ]
}

```
