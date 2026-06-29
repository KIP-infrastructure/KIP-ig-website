# Birthplace - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Birthplace**

## CodeSystem: Birthplace 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Birthplace | *Version*:2.23.1 |
| Active as of 2022-09-30 | *Computable Name*:Birthplace |

 
Birthplace 

 This Code system is referenced in the content logical definition of the following value sets: 

* [FoedselsstedRETSPSYK](ValueSet-FoedselsstedRETSPSYK.md)
* [OperationDanmarkUdlandetDHR](ValueSet-OperationDanmarkUdlandetDHR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Birthplace",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Birthplace",
  "version" : "2.23.1",
  "name" : "Birthplace",
  "title" : "Birthplace",
  "status" : "active",
  "date" : "2022-09-30T00:00:00+02:00",
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
  "description" : "Birthplace",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 11,
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
    "code" : "DK",
    "display" : "Denmark",
    "definition" : "Denmark / Danmark"
  },
  {
    "code" : "GL",
    "display" : "Greenland",
    "definition" : "Greenland / Grønland"
  },
  {
    "code" : "IR",
    "display" : "Iran",
    "definition" : "Iran"
  },
  {
    "code" : "eastern_europe",
    "display" : "Eastern Europe",
    "definition" : "Eastern Europe / Østeuropa"
  },
  {
    "code" : "west",
    "display" : "West",
    "definition" : "West / Vesten"
  },
  {
    "code" : "middle_east",
    "display" : "Middle East",
    "definition" : "Middle East / Mellemøsten"
  },
  {
    "code" : "far_east",
    "display" : "Far East",
    "definition" : "Far East / Fjernøsten"
  },
  {
    "code" : "africa",
    "display" : "Africa",
    "definition" : "Africa / Afrika",
    "concept" : [{
      "code" : "north_africa",
      "display" : "North Africa",
      "definition" : "North Africa / Nordafrika"
    }]
  },
  {
    "code" : "rest_of_world",
    "display" : "Rest of World",
    "definition" : "Rest of World / Resten af verden"
  },
  {
    "code" : "abroad",
    "display" : "Abroad",
    "definition" : "Abroad / Udlandet"
  }]
}

```
