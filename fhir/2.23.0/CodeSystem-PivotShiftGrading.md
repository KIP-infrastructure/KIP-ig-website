# Pivot Shift grading - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Pivot Shift grading**

## CodeSystem: Pivot Shift grading 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/PivotShiftGrading | *Version*:2.23.0 |
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
  "version" : "2.23.0",
  "name" : "PivotShiftGrading",
  "title" : "Pivot Shift grading",
  "status" : "active",
  "date" : "2022-09-15T00:00:00+02:00",
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
  "description" : "Pivot Shift grading",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 4,
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
  }]
}

```
