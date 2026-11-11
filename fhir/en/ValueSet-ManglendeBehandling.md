# Grund til manglende behandling - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Grund til manglende behandling**

## ValueSet: Grund til manglende behandling 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ManglendeBehandling | *Version*:2.27.3 |
| Active as of 2022-09-06 | *Computable Name*:ManglendeBehandling |

 
Årsag til manglende behandling 

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
  "id" : "ManglendeBehandling",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ManglendeBehandling",
  "version" : "2.27.3",
  "name" : "ManglendeBehandling",
  "title" : "Grund til manglende behandling",
  "status" : "active",
  "date" : "2022-09-06T00:00:00+02:00",
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
  "description" : "Årsag til manglende behandling",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentNotGiven",
      "concept" : [{
        "code" : "unsuitable",
        "display" : "Uegnet til behandling"
      },
      {
        "code" : "unwanted",
        "display" : "Ønskede ikke behandling"
      },
      {
        "code" : "died",
        "display" : "Døde før behandling"
      },
      {
        "code" : "lack_capacity",
        "display" : "Manglende kapacitet"
      },
      {
        "code" : "other_palliative_department",
        "display" : "Behandlet af anden palliativ enhed"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden årsag"
      }]
    }]
  }
}

```
