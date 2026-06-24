# Undersøgelsestype (DUGA) - KIP Infrastructure v2.21.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Undersøgelsestype (DUGA)**

## CodeSystem: Undersøgelsestype (DUGA) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/UndersoegelsesTypeDUGA | *Version*:2.21.0 |
| Active as of 2024-03-06 | *Computable Name*:UndersoegelsesTypeDUGACS |

 
Undersøgelsestype (DUGA) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [UndersoegelsesTypeDUGA](ValueSet-UndersoegelsesTypeDUGA.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "UndersoegelsesTypeDUGA",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/UndersoegelsesTypeDUGA",
  "version" : "2.21.0",
  "name" : "UndersoegelsesTypeDUGACS",
  "title" : "Undersøgelsestype (DUGA)",
  "status" : "active",
  "date" : "2024-03-06T00:00:00+02:00",
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
  "description" : "Undersøgelsestype (DUGA)",
  "caseSensitive" : false,
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
    "code" : "urin_inkontinens",
    "display" : "Urin inkontinens",
    "definition" : "Urin inkontinens"
  },
  {
    "code" : "genital_prolaps",
    "display" : "Genital prolaps",
    "definition" : "Genital prolaps"
  }]
}

```
