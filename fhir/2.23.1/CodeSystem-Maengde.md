# Mængde - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mængde**

## CodeSystem: Mængde 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Maengde | *Version*:2.23.1 |
| Active as of 2024-02-13 | *Computable Name*:Maengde |

 
Angivelse af mængder 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Maengder](ValueSet-Maengder.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Maengde",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Maengde",
  "version" : "2.23.1",
  "name" : "Maengde",
  "title" : "Mængde",
  "status" : "active",
  "date" : "2024-02-13T00:00:00+02:00",
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
  "description" : "Angivelse af mængder",
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
    "code" : "ingen",
    "display" : "Ingen",
    "definition" : "Ingen"
  },
  {
    "code" : "lille",
    "display" : "Lille",
    "definition" : "Lille mængde"
  },
  {
    "code" : "moderat",
    "display" : "Moderat",
    "definition" : "Moderat mængde"
  },
  {
    "code" : "stor",
    "display" : "Stor",
    "definition" : "Stor mængde"
  }]
}

```
