# Konference DPD - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Konference DPD**

## ValueSet: Konference DPD 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KonferenceDPD | *Version*:2.27.2 |
| Active as of 2022-09-26 | *Computable Name*:KonferenceDPD |

 
Tværfaglig konference 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "KonferenceDPD",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KonferenceDPD",
  "version" : "2.27.2",
  "name" : "KonferenceDPD",
  "title" : "Konference DPD",
  "status" : "active",
  "date" : "2022-09-26T00:00:00+02:00",
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
  "description" : "Tværfaglig konference",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ConferenceParticipants",
      "concept" : [{
        "code" : "4+",
        "display" : "Afholdt med minimum 4 specificerede faggrupper og konklusion"
      },
      {
        "code" : "2-3",
        "display" : "Afholdt med 2-3 specificerede faggrupper og konklusion"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "none",
        "display" : "Ikke dokumenteret i journal"
      }]
    }]
  }
}

```
