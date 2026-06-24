# Medicin givet ved hjertestop - KIP Infrastructure v2.21.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Medicin givet ved hjertestop**

## CodeSystem: Medicin givet ved hjertestop 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/MedicinDANARREST | *Version*:2.21.0 |
| Active as of 2022-06-29 | *Computable Name*:MedicinDANARRESTCS |

 
Mediciin givet ved behandling i DANARREST specialet 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MedicinDANARREST](ValueSet-MedicinDANARREST.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MedicinDANARREST",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/MedicinDANARREST",
  "version" : "2.21.0",
  "name" : "MedicinDANARRESTCS",
  "title" : "Medicin givet ved hjertestop",
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
  "description" : "Mediciin givet ved behandling i DANARREST specialet",
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
    "code" : "adrenalin",
    "display" : "Adrenalin",
    "definition" : "Adrenalin"
  },
  {
    "code" : "amiodaron",
    "display" : "Amiodaron",
    "definition" : "Amiodaron"
  },
  {
    "code" : "ingen_D",
    "display" : "Ingen af disse",
    "definition" : "Ingen af disse"
  }]
}

```
