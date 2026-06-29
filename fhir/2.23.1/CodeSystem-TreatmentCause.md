# Treatment cause - unplanned - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Treatment cause - unplanned**

## CodeSystem: Treatment cause - unplanned 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/TreatmentCause | *Version*:2.23.1 |
| Active as of 2022-06-29 | *Computable Name*:TreatmentCause |

 
Treatment cause - unplanned 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ExtraordinaryTreatmenCause](ValueSet-ExtraordinaryTreatmenCause.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "TreatmentCause",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentCause",
  "version" : "2.23.1",
  "name" : "TreatmentCause",
  "title" : "Treatment cause - unplanned",
  "status" : "active",
  "date" : "2022-06-29T00:00:00+02:00",
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
  "description" : "Treatment cause - unplanned",
  "content" : "complete",
  "count" : 2,
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
    "code" : "toxicity",
    "display" : "Toxicity",
    "definition" : "Toxicity / Toksicitet SNOMED-CT: 75478009"
  },
  {
    "code" : "insufficient_response",
    "display" : "Insufficient response",
    "definition" : "Insufficient response / Utilstrækkelige repons"
  }]
}

```
