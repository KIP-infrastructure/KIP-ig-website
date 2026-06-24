# Registry - Unspecified codes - KIP Infrastructure v2.21.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Registry - Unspecified codes**

## CodeSystem: Registry - Unspecified codes 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Registry | *Version*:2.21.0 |
| Active as of 2022-08-22 | *Computable Name*:Registry |

 
Registry - Unspecified codes 

 This Code system is referenced in the content logical definition of the following value sets: 

* [RegistreringEksklusionHAEMA](ValueSet-RegistreringEksklusionHAEMA.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Registry",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Registry",
  "version" : "2.21.0",
  "name" : "Registry",
  "title" : "Registry - Unspecified codes",
  "status" : "active",
  "date" : "2022-08-22T00:00:00+02:00",
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
  "description" : "Registry - Unspecified codes",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 7,
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
    "code" : "ej_reg_pligtig",
    "display" : "Ej registreringspligtig hæmatologisk sygdom",
    "definition" : "Ej registreringspligtig hæmatologisk sygdom"
  },
  {
    "code" : "eksisterende",
    "display" : "Eksisterende registreringer dækker over de(n) hæmatologiske sygdomme pt har",
    "definition" : "Eksisterende registreringer dækker over de(n) hæmatologiske sygdomme pt har"
  },
  {
    "code" : "udland",
    "display" : "Bosiddende i udlandet på diagnosetidspunktet",
    "definition" : "Bosiddende i udlandet på diagnosetidspunktet"
  },
  {
    "code" : "flyttet",
    "display" : "Patientforløb flyttet til anden hæmatologisk afdeling",
    "definition" : "Patientforløb flyttet til anden hæmatologisk afdeling"
  },
  {
    "code" : "barn",
    "display" : "Behandlet på børneafdeling el anden IKKE hæmatologisk afd",
    "definition" : "Behandlet på børneafdeling el anden IKKE hæmatologisk afd"
  },
  {
    "code" : "ej_relaps",
    "display" : "Pt har ikke relaps/progression",
    "definition" : "Pt har ikke relaps/progression"
  },
  {
    "code" : "afsluttet",
    "display" : "Afsluttet: Patientens forløb er afsluttet fra afdeling og følges IKKE på anden hæmatologisk afdeling",
    "definition" : "Afsluttet: Patientens forløb er afsluttet fra afdeling og følges IKKE på anden hæmatologisk afdeling"
  }]
}

```
