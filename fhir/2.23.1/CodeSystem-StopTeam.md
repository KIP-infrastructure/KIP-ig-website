# Teammedlemmer på stopholdet - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Teammedlemmer på stopholdet**

## CodeSystem: Teammedlemmer på stopholdet 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/StopTeam | *Version*:2.23.1 |
| Active as of 2022-06-29 | *Computable Name*:StopTeamCS |

 
Teammedlemmer/personale på stopholdet 

 This Code system is referenced in the content logical definition of the following value sets: 

* [StopTeam](ValueSet-StopTeam.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "StopTeam",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/StopTeam",
  "version" : "2.23.1",
  "name" : "StopTeamCS",
  "title" : "Teammedlemmer på stopholdet",
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
  "description" : "Teammedlemmer/personale på stopholdet",
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
    "code" : "anastesiLaege",
    "display" : "Anæstesilæge(r)",
    "definition" : "Anæstesilæge(r)"
  },
  {
    "code" : "anastesiSP",
    "display" : "Anæstesisygeplejerske(r)",
    "definition" : "Anæstesisygeplejerske(r)"
  },
  {
    "code" : "kardiolog",
    "display" : "Kardiolog(er)",
    "definition" : "Kardiolog(er)"
  },
  {
    "code" : "SP",
    "display" : "Sygeplejerske(r)",
    "definition" : "Sygeplejerske(r)"
  },
  {
    "code" : "portor",
    "display" : "Portør/serviceass.",
    "definition" : "Portør/serviceass."
  },
  {
    "code" : "andre",
    "display" : "Andre",
    "definition" : "Andre"
  }]
}

```
