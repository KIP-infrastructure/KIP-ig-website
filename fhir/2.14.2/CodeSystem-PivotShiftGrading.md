# Pivot Shift grading - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Pivot Shift grading**

## CodeSystem: Pivot Shift grading 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/PivotShiftGrading | *Version*:2.14.2 |
| Active as of 2022-09-15 | *Computable Name*:PivotShiftGrading |

 
Pivot Shift grading 

 This Code system is referenced in the content logical definition of the following value sets: 

* [PivotShift](ValueSet-PivotShift.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "PivotShiftGrading",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/PivotShiftGrading",
  "version" : "2.14.2",
  "name" : "PivotShiftGrading",
  "title" : "Pivot Shift grading",
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
  "description" : "Pivot Shift grading",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "grade_0",
      "display" : "Grade 0: Equal",
      "definition" : "Grade 0: Equal"
    },
    {
      "code" : "grade_1",
      "display" : "Grade 1: Glide+",
      "definition" : "Grade 1: Glide+"
    },
    {
      "code" : "grade_2",
      "display" : "Grade 2: Clunk++",
      "definition" : "Grade 2: Clunk++"
    },
    {
      "code" : "grade_3",
      "display" : "Grade 3: Gross+++",
      "definition" : "Grade 3: Gross+++"
    }
  ]
}

```
