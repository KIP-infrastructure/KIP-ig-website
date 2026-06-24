# Fisher grading scale - KIP Infrastructure v2.21.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Fisher grading scale**

## CodeSystem: Fisher grading scale 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/FisherGradingScale | *Version*:2.21.0 |
| Active as of 2022-06-28 | *Computable Name*:FisherGradingScale |

 
Fisher grading scale; Link: https://radiopaedia.org/articles/fisher-scale 

 This Code system is referenced in the content logical definition of the following value sets: 

* [FisherGrad](ValueSet-FisherGrad.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "FisherGradingScale",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/FisherGradingScale",
  "version" : "2.21.0",
  "name" : "FisherGradingScale",
  "title" : "Fisher grading scale",
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
  "description" : "Fisher grading scale; Link: https://radiopaedia.org/articles/fisher-scale",
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
    "code" : "grade1",
    "display" : "Grade 1",
    "definition" : "Grade 1: No SAH detected"
  },
  {
    "code" : "grade2",
    "display" : "Grade 2",
    "definition" : "Grade 2: Diffuse or vertical layer of subarachnoid blood < 1mm thick"
  },
  {
    "code" : "grade3",
    "display" : "Grade 3",
    "definition" : "Grade 3: Localized clot and/or vertical layer within the subarachnoid space > 1mm thick"
  },
  {
    "code" : "grade4",
    "display" : "Grade 4",
    "definition" : "Grade 4: Intracerebral hemorrhage (ICH) or intraventricular hemorrhage (IVH) with diffuse or no SAH"
  }]
}

```
