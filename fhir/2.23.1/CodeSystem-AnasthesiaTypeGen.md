# Anæstesi Type Generel - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Anæstesi Type Generel**

## CodeSystem: Anæstesi Type Generel 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/AnasthesiaTypeGen | *Version*:2.23.1 |
| Active as of 2022-06-30 | *Computable Name*:AnasthesiaTypeGenCS |

 
Generel Anæstesiydelse - Tillæg 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AnasthesiaTypeGen](ValueSet-AnasthesiaTypeGen.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "AnasthesiaTypeGen",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/AnasthesiaTypeGen",
  "version" : "2.23.1",
  "name" : "AnasthesiaTypeGenCS",
  "title" : "Anæstesi Type Generel",
  "status" : "active",
  "date" : "2022-06-30T00:00:00+02:00",
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
  "description" : "Generel Anæstesiydelse - Tillæg",
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
    "code" : "inhalation",
    "display" : "Inhalation",
    "definition" : "Inhalation"
  },
  {
    "code" : "IV_inhalation",
    "display" : "IV og inhalation",
    "definition" : "IV og inhalation"
  },
  {
    "code" : "TIVA",
    "display" : "TIVA",
    "definition" : "TIVA"
  }]
}

```
