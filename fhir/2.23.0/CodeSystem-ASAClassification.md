# ASA Physical Status Classification System - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ASA Physical Status Classification System**

## CodeSystem: ASA Physical Status Classification System 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ASAClassification | *Version*:2.23.0 |
| Active as of 2022-05-31 | *Computable Name*:ASAClassification |

 
Score udviklet til vurdering af det fysiske helbred. Link: https://www.asahq.org/standards-and-guidelines/asa-physical-status-classification-system 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ASAIVI](ValueSet-ASAIVI.md)
* [ASAIVIkort](ValueSet-ASAIVIkort.md)
* [AsaIV](ValueSet-AsaIV.md)
* [AsaIVkort](ValueSet-AsaIVkort.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ASAClassification",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ASAClassification",
  "version" : "2.23.0",
  "name" : "ASAClassification",
  "title" : "ASA Physical Status Classification System",
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
  "description" : "Score udviklet til vurdering af det fysiske helbred. Link: https://www.asahq.org/standards-and-guidelines/asa-physical-status-classification-system",
  "content" : "complete",
  "count" : 6,
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
    "code" : "asai",
    "display" : "ASA I",
    "definition" : "A normal healthy patient"
  },
  {
    "code" : "asaii",
    "display" : "ASA II",
    "definition" : "A patient with mild systemic disease"
  },
  {
    "code" : "asaiii",
    "display" : "ASA III",
    "definition" : "A patient with severe systemic disease"
  },
  {
    "code" : "asaiv",
    "display" : "ASA IV",
    "definition" : "A patient with severe systemic disease that is a constant threat to life"
  },
  {
    "code" : "asav",
    "display" : "ASA V",
    "definition" : "A moribund patient who is not expected to survive without the operation"
  },
  {
    "code" : "asavi",
    "display" : "ASA VI",
    "definition" : "A declared brain-dead patient whose organs are being removed for donor purposes"
  }]
}

```
