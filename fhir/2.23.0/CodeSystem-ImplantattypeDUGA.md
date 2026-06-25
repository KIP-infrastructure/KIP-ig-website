# Implantattype - Urogynækologi (DUGA) - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Implantattype - Urogynækologi (DUGA)**

## CodeSystem: Implantattype - Urogynækologi (DUGA) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ImplantattypeDUGA | *Version*:2.23.0 |
| Active as of 2024-02-14 | *Computable Name*:ImplantattypeDUGACS |

 
Implantattype - Urogynækologi (DUGA) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ImplantattypeDUGA](ValueSet-ImplantattypeDUGA.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ImplantattypeDUGA",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ImplantattypeDUGA",
  "version" : "2.23.0",
  "name" : "ImplantattypeDUGACS",
  "title" : "Implantattype - Urogynækologi (DUGA)",
  "status" : "active",
  "date" : "2024-02-14T00:00:00+02:00",
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
  "description" : "Implantattype - Urogynækologi (DUGA)",
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
    "code" : "mesh_resorberbar",
    "display" : "Syntetisk mesh, resorberbar",
    "definition" : "Syntetisk mesh, resorberbar"
  },
  {
    "code" : "mesh_non_resorberbar",
    "display" : "Syntetisk mesh, non-resorberbar",
    "definition" : "Syntetisk mesh, non-resorberbar"
  },
  {
    "code" : "bio_autolog_graft",
    "display" : "Biologisk implantat, autolog graft",
    "definition" : "Biologisk implantat, autolog graft"
  },
  {
    "code" : "bio_allograft",
    "display" : "Biologisk implantat, allograft",
    "definition" : "Biologisk implantat, allograft"
  },
  {
    "code" : "bio_xenograft",
    "display" : "Biologisk implantat, xenograft",
    "definition" : "Biologisk implantat, xenograft"
  }]
}

```
