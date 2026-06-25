# Risk assessment - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Risk assessment**

## CodeSystem: Risk assessment 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/RiskAssessment | *Version*:2.23.0 |
| Active as of 2022-07-11 | *Computable Name*:RiskAssessment |

 
Risk assessment 

 This Code system is referenced in the content logical definition of the following value sets: 

* [RisikovurderingRETSPSYK](ValueSet-RisikovurderingRETSPSYK.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "RiskAssessment",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/RiskAssessment",
  "version" : "2.23.0",
  "name" : "RiskAssessment",
  "title" : "Risk assessment",
  "status" : "active",
  "date" : "2022-07-11T00:00:00+02:00",
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
  "description" : "Risk assessment",
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
    "code" : "hcr-20",
    "display" : "HCR-20",
    "definition" : "HCR-20"
  },
  {
    "code" : "start",
    "display" : "START",
    "definition" : "START"
  },
  {
    "code" : "saprof",
    "display" : "SAPROF",
    "definition" : "SAPROF"
  },
  {
    "code" : "rsvp",
    "display" : "RSVP",
    "definition" : "RSVP"
  },
  {
    "code" : "v-risk-10",
    "display" : "V-RISK-10",
    "definition" : "V-RISK-10"
  }]
}

```
