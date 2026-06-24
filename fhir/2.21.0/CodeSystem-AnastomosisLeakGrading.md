# Anastomosis leak grading - KIP Infrastructure v2.21.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Anastomosis leak grading**

## CodeSystem: Anastomosis leak grading 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/AnastomosisLeakGrading | *Version*:2.21.0 |
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
  "version" : "2.21.0",
  "name" : "AnastomosisLeakGrading",
  "title" : "Anastomosis leak grading",
  "status" : "active",
  "date" : "2022-08-17T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "Anastomosis leak grading",
  "content" : "complete",
  "count" : 3,
  "property" : [{
    "code" : "comment",
    "uri" : "http://hl7.org/fhir/concept-properties#comment",
    "description" : "A string that provides additional detail pertinent to the use or understanding of the concept",
    "type" : "string"
  },
  {
    "code" : "effectiveDate",
    "uri" : "http://hl7.org/fhir/concept-properties#effectiveDate",
    "description" : "The date at which the concept status was last changed",
    "type" : "dateTime"
  },
  {
    "code" : "status",
    "uri" : "http://hl7.org/fhir/concept-properties#status",
    "description" : "A code that indicates the status of the concept. Typical values are active, experimental, deprecated, and retired",
    "type" : "code"
  },
  {
    "code" : "inactive",
    "uri" : "http://hl7.org/fhir/concept-properties#inactive",
    "description" : "True if the concept is not considered active - e.g. not a valid concept any more. Property type is boolean, default value is false. Note that the status property may also be used to indicate that a concept is inactive",
    "type" : "boolean"
  }],
  "concept" : [{
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
  }]
}

```
