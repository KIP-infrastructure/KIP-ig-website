# Hunt and Hess scale - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Hunt and Hess scale**

## CodeSystem: Hunt and Hess scale 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/HuntHessClassification | *Version*:2.23.1 |
| Active as of 2022-06-28 | *Computable Name*:HuntHessClassificationCS |

 
Hunt and Hess scale; Link: https://radiopaedia.org/articles/hunt-and-hess-grading-system 

 This Code system is referenced in the content logical definition of the following value sets: 

* [HuntHessClassification](ValueSet-HuntHessClassification.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "HuntHessClassification",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/HuntHessClassification",
  "version" : "2.23.1",
  "name" : "HuntHessClassificationCS",
  "title" : "Hunt and Hess scale",
  "status" : "active",
  "date" : "2022-06-28T00:00:00+02:00",
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
  "description" : "Hunt and Hess scale; Link: https://radiopaedia.org/articles/hunt-and-hess-grading-system",
  "content" : "complete",
  "count" : 5,
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
    "code" : "grade_1",
    "display" : "Grade 1",
    "definition" : "Grade 1: Asymptomatic or minimal headache and slight neck stiffness"
  },
  {
    "code" : "grade_2",
    "display" : "Grade 2",
    "definition" : "Grade 2: Moderate to severe headache; neck stiffness; no neurologic deficit except cranial nerve palsy"
  },
  {
    "code" : "grade_3",
    "display" : "Grade 3",
    "definition" : "Grade 3: Drowsy; minimal neurologic deficit"
  },
  {
    "code" : "grade_4",
    "display" : "Grade 4",
    "definition" : "Grade 4: Stuporous; moderate to severe hemiparesis; possibly early decerebrate rigidity and vegetative disturbances"
  },
  {
    "code" : "grade_5",
    "display" : "Grade 5",
    "definition" : "Grade 5: Deep coma; decerebrate rigidity; moribund"
  }]
}

```
