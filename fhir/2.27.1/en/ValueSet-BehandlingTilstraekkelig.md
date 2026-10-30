# Behandling; Udfald for at angive om det er en tilstrækkelig behandling - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Behandling; Udfald for at angive om det er en tilstrækkelig behandling**

## ValueSet: Behandling; Udfald for at angive om det er en tilstrækkelig behandling 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/BehandlingTilstraekkelig | *Version*:2.27.1 |
| Active as of 2022-06-29 | *Computable Name*:BehandlingTilstraekkelig |

 
Behandling; Udfald for at angive om det er en tilstrækkelig behandling 

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
  "id" : "BehandlingTilstraekkelig",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/BehandlingTilstraekkelig",
  "version" : "2.27.1",
  "name" : "BehandlingTilstraekkelig",
  "title" : "Behandling; Udfald for at angive om det er en tilstrækkelig behandling",
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
  "description" : "Behandling; Udfald for at angive om det er en tilstrækkelig behandling",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentSufficient",
      "concept" : [{
        "code" : "sufficient",
        "display" : "Sufficient behandling"
      },
      {
        "code" : "insufficient",
        "display" : "Insufficient behandling"
      }]
    }]
  }
}

```
