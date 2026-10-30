# TilsynAfdeling - DPD - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TilsynAfdeling - DPD**

## ValueSet: TilsynAfdeling - DPD 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/TilsynAfdeling | *Version*:2.27.1 |
| Active as of 2026-10-07 | *Computable Name*:TilsynAfdelingVS |

 
TilsynAfdeling - DPD 

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
  "id" : "TilsynAfdeling",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/TilsynAfdeling",
  "version" : "2.27.1",
  "name" : "TilsynAfdelingVS",
  "title" : "TilsynAfdeling - DPD",
  "status" : "active",
  "date" : "2026-10-07T00:00:00+02:00",
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
  "description" : "TilsynAfdeling - DPD",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TilsynAfdeling",
      "concept" : [{
        "code" : "TilSyn"
      },
      {
        "code" : "Visitation"
      },
      {
        "code" : "AldrigSet"
      }]
    }]
  }
}

```
