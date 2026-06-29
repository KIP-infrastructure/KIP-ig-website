# Place of death - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Place of death**

## CodeSystem: Place of death 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/DeathPlace | *Version*:2.23.1 |
| Active as of 2022-08-23 | *Computable Name*:DeathPlace |

 
Place of death 

 This Code system is referenced in the content logical definition of the following value sets: 

* [DoedLokation](ValueSet-DoedLokation.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "DeathPlace",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/DeathPlace",
  "version" : "2.23.1",
  "name" : "DeathPlace",
  "title" : "Place of death",
  "status" : "active",
  "date" : "2022-08-23T00:00:00+02:00",
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
  "description" : "Place of death",
  "caseSensitive" : false,
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
    "code" : "home",
    "display" : "Home",
    "definition" : "Home / Hjemmet"
  },
  {
    "code" : "palliative",
    "display" : "This palliative department",
    "definition" : "This palliative department / I denne palliative afdeling"
  },
  {
    "code" : "other_palliative",
    "display" : "Other palliative department",
    "definition" : "Other palliative department / I anden palliativ afdeling"
  },
  {
    "code" : "non_palliative",
    "definition" : "Ikke-palliativ sygehusafdeling"
  },
  {
    "code" : "relief_area",
    "definition" : "Aflastningsplads"
  }]
}

```
