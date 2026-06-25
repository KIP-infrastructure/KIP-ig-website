# Cancer investigation - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Cancer investigation**

## CodeSystem: Cancer investigation 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/CancerInvestigation | *Version*:2.23.0 |
| Active as of 2022-05-31 | *Computable Name*:CancerInvestigation |

 
Udredning for cancerpatienter for cancerpatienter. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [CancerUdredning](ValueSet-CancerUdredning.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "CancerInvestigation",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/CancerInvestigation",
  "version" : "2.23.0",
  "name" : "CancerInvestigation",
  "title" : "Cancer investigation",
  "status" : "active",
  "date" : "2022-05-31T00:00:00+02:00",
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
  "description" : "Udredning for cancerpatienter for cancerpatienter.",
  "content" : "complete",
  "count" : 10,
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
    "code" : "eus",
    "display" : "EUS",
    "definition" : "EUS"
  },
  {
    "code" : "lap/lus",
    "display" : "Lap/LUS",
    "definition" : "Lap/LUS"
  },
  {
    "code" : "ct",
    "display" : "CT",
    "definition" : "CT"
  },
  {
    "code" : "pet/ct",
    "display" : "PET/CT",
    "definition" : "PET/CT"
  },
  {
    "code" : "mr",
    "display" : "MR",
    "definition" : "MR"
  },
  {
    "code" : "us",
    "display" : "UL",
    "definition" : "UL",
    "concept" : [{
      "code" : "abdomen",
      "display" : "UL abdomen",
      "definition" : "UL abdomen"
    },
    {
      "code" : "neck",
      "display" : "UL hals",
      "definition" : "UL hals"
    }]
  },
  {
    "code" : "ebus",
    "display" : "EBUS",
    "definition" : "EBUS"
  },
  {
    "code" : "other",
    "display" : "Øvrige",
    "definition" : "Øvrige"
  }]
}

```
