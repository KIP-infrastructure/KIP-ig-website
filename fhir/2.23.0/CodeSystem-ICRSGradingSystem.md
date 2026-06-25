# ICRS grading system - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ICRS grading system**

## CodeSystem: ICRS grading system 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ICRSGradingSystem | *Version*:2.23.0 |
| Active as of 2022-09-19 | *Computable Name*:ICRSGradingSystem |

 
ICRS grading system; Link: https://www.researchgate.net/figure/The-International-Cartilage-Repair-Society-ICRS-Cartilage-Lesion-Classification-System_fig2_224847959 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ICRSGraduering14](ValueSet-ICRSGraduering14.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ICRSGradingSystem",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ICRSGradingSystem",
  "version" : "2.23.0",
  "name" : "ICRSGradingSystem",
  "title" : "ICRS grading system",
  "status" : "active",
  "date" : "2022-09-19T00:00:00+02:00",
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
  "description" : "ICRS grading system; Link: https://www.researchgate.net/figure/The-International-Cartilage-Repair-Society-ICRS-Cartilage-Lesion-Classification-System_fig2_224847959",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 11,
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
    "display" : "Grade 0: Normal",
    "definition" : "Grade 0: Normal"
  },
  {
    "code" : "grade_1",
    "display" : "Grade 1: Nearly normal, superficial lesions",
    "definition" : "Grade 1: Nearly normal, superficial lesions",
    "concept" : [{
      "code" : "grade_1a",
      "display" : "Grade 1A: Soft indentations",
      "definition" : "Grade 1A: Soft indentations"
    },
    {
      "code" : "grade_1b",
      "display" : "Grade 1B: Superficial fissures and cracks",
      "definition" : "Grade 1B: Superficial fissures and cracks"
    }]
  },
  {
    "code" : "grade_2",
    "display" : "Grade 2: Abnormal",
    "definition" : "Grade 2: Abnormal, lesiosn extending down to <50% of cartilage depth"
  },
  {
    "code" : "grade_3",
    "display" : "Grade 3: Severely abnormal",
    "definition" : "Grade 3: Severely abnormal, cartilage defects extending down >50% of cartilage depth",
    "concept" : [{
      "code" : "grade_3a",
      "display" : "Grade 3A: Severely abnormal",
      "definition" : "Grade 3A: Cartilage defects extending down >50% of cartilage depth..."
    },
    {
      "code" : "grade_3b",
      "display" : "Grade 3B: Severely abnormal",
      "definition" : "Grade 3B: ...as well as down to calcified layer..."
    },
    {
      "code" : "grade_3c",
      "display" : "Grade 3C: Severely abnormal",
      "definition" : "Grade 3C: ...and down to but not through the sunchondral bone."
    },
    {
      "code" : "grade_3d",
      "display" : "Grade 3D: Severely abnormal",
      "definition" : "Grade 3D: Blisters are included in this grade."
    }]
  },
  {
    "code" : "grade_4",
    "display" : "Grade 4: Severely abnormal",
    "definition" : "Grade 4: Severely abnormal"
  }]
}

```
