# Interventionsgruppe - KIP Infrastructure v2.21.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Interventionsgruppe**

## CodeSystem: Interventionsgruppe 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Interventionsgruppe | *Version*:2.21.0 |
| Active as of 2024-01-10 | *Computable Name*:Interventionsgruppe |

 
Interventionsgruppe (DNSL) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [InterventionsgruppeDialyseHaemoDNSL](ValueSet-InterventionsgruppeDialyseHaemoDNSL.md)
* [InterventionsgruppeDialysePeritonealDNSL](ValueSet-InterventionsgruppeDialysePeritonealDNSL.md)
* [InterventionsgruppeTransplantDNSL](ValueSet-InterventionsgruppeTransplantDNSL.md)
* [InterventionsgruppeTransplantExclDNSL](ValueSet-InterventionsgruppeTransplantExclDNSL.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Interventionsgruppe",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Interventionsgruppe",
  "version" : "2.21.0",
  "name" : "Interventionsgruppe",
  "title" : "Interventionsgruppe",
  "status" : "active",
  "date" : "2024-01-10T00:00:00+02:00",
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
  "description" : "Interventionsgruppe (DNSL)",
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
    "code" : "100",
    "display" : "100: Ophør med aktiv behandling",
    "definition" : "Ophør med aktiv behandling"
  },
  {
    "code" : "110",
    "display" : "110: Genvunden funktion",
    "definition" : "Genvunden funktion"
  },
  {
    "code" : "120",
    "display" : "120: Afsendelse til",
    "definition" : "Afsendelse til"
  },
  {
    "code" : "130",
    "display" : "130: Modtagelse fra",
    "definition" : "Modtagelse fra"
  },
  {
    "code" : "310",
    "display" : "310: Hæmodialyse",
    "definition" : "Hæmodialyse"
  },
  {
    "code" : "510",
    "display" : "510: Peritonealdialyse",
    "definition" : "Peritonealdialyse"
  },
  {
    "code" : "550",
    "display" : "550: Peritonitis",
    "definition" : "Peritonitis"
  },
  {
    "code" : "610",
    "display" : "610: Transplantation",
    "definition" : "Transplantation"
  },
  {
    "code" : "620",
    "display" : "620: Nyrestart",
    "definition" : "Nyrestart"
  },
  {
    "code" : "630",
    "display" : "630: Rejektion",
    "definition" : "Rejektion"
  },
  {
    "code" : "650",
    "display" : "650: Grafttab",
    "definition" : "Grafttab"
  }]
}

```
