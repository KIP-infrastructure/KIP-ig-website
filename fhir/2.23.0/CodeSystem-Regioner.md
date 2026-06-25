# Regioner - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Regioner**

## CodeSystem: Regioner 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Regioner | *Version*:2.23.0 |
| Active as of 2024-03-13 | *Computable Name*:RegionerCS |

 
Danske regioner 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Regioner](ValueSet-Regioner.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Regioner",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Regioner",
  "version" : "2.23.0",
  "name" : "RegionerCS",
  "title" : "Regioner",
  "status" : "active",
  "date" : "2024-03-13T00:00:00+02:00",
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
  "description" : "Danske regioner",
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
    "code" : "hovedstaden",
    "display" : "Hovedstaden",
    "definition" : "Hovedstaden"
  },
  {
    "code" : "midtjylland",
    "display" : "Midtjylland",
    "definition" : "Midtjylland"
  },
  {
    "code" : "nordjylland",
    "display" : "Nordjylland",
    "definition" : "Nordjylland"
  },
  {
    "code" : "sjaelland",
    "display" : "Sjælland",
    "definition" : "Sjælland"
  },
  {
    "code" : "syddanmark",
    "display" : "Syddanmark",
    "definition" : "Syddanmark"
  }]
}

```
