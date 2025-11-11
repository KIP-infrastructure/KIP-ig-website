# Knee looseness grading - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Knee looseness grading**

## CodeSystem: Knee looseness grading 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/KneeLoosenessGrading | *Version*:2.13.0 |
| Active as of 2022-09-15 | *Computable Name*:KneeLoosenessGrading |

 
Knee looseness grading 

 This Code system is referenced in the content logical definition of the following value sets: 

* [KnaeLoeshedGradering](ValueSet-KnaeLoeshedGradering.md)
* [KnaeLoeshedPosterolateral](ValueSet-KnaeLoeshedPosterolateral.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "KneeLoosenessGrading",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/KneeLoosenessGrading",
  "version" : "2.13.0",
  "name" : "KneeLoosenessGrading",
  "title" : "Knee looseness grading",
  "status" : "active",
  "date" : "2022-09-15T00:00:00+02:00",
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
  "description" : "Knee looseness grading",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 8,
  "concept" : [
    {
      "code" : "grade_0",
      "display" : "Grade 0: 0-2 mm",
      "definition" : "Grade 0: 0-2 mm"
    },
    {
      "code" : "grade_1",
      "display" : "Grade 1: 2-5 mm",
      "definition" : "Grade 1: 2-5 mm"
    },
    {
      "code" : "grade_2",
      "display" : "Grade 2: 6-10 mm",
      "definition" : "Grade 2: 6-10 mm"
    },
    {
      "code" : "grade_3",
      "display" : "Grade 3: >10 mm",
      "definition" : "Grade 3: >10 mm"
    },
    {
      "code" : "0-5",
      "display" : "0-5 degrees",
      "definition" : "0-5 degrees / 0-5 grader"
    },
    {
      "code" : "6-10",
      "display" : "6-10 degrees",
      "definition" : "6-10 degrees / 6-10 grader"
    },
    {
      "code" : "11-19",
      "display" : "11-19 degrees",
      "definition" : "11-19 degrees / 11-19 grader"
    },
    {
      "code" : ">20",
      "display" : ">20 degrees",
      "definition" : ">20 degrees / >20 grader"
    }
  ]
}

```
