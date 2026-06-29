# Scandinavian Stroke Scale (SSS) - Orientation - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Scandinavian Stroke Scale (SSS) - Orientation**

## CodeSystem: Scandinavian Stroke Scale (SSS) - Orientation 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/SSSOrientation | *Version*:2.23.1 |
| Active as of 2022-06-23 | *Computable Name*:SSSOrientation |

 
Scandinavian Stroke Scale (SSS) - Orientation: Der spørges, om hvilken måned det er, hvilket hospital patienten er på, og patientens CPR-nr. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [SSSOrientering](ValueSet-SSSOrientering.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "SSSOrientation",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/SSSOrientation",
  "version" : "2.23.1",
  "name" : "SSSOrientation",
  "title" : "Scandinavian Stroke Scale (SSS) - Orientation",
  "status" : "active",
  "date" : "2022-06-23T00:00:00+02:00",
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
  "description" : "Scandinavian Stroke Scale (SSS) - Orientation: Der spørges, om hvilken måned det er, hvilket hospital patienten er på, og patientens CPR-nr.",
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
    "code" : "6",
    "display" : "6",
    "definition" : "3 korrekte svar."
  },
  {
    "code" : "4",
    "display" : "4",
    "definition" : "2 af 3 svar korrekte."
  },
  {
    "code" : "2",
    "display" : "2",
    "definition" : "1 af 3 svar korrekte."
  },
  {
    "code" : "0",
    "display" : "0",
    "definition" : "Ingen korrekte svar."
  }]
}

```
