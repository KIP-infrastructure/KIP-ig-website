# Frekvens Nedsynkning (DUGA) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Frekvens Nedsynkning (DUGA)**

## ValueSet: Frekvens Nedsynkning (DUGA) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/FrekvensNedsynkningDUGA | *Version*:2.27.3 |
| Active as of 2024-02-13 | *Computable Name*:FrekvensNedsynkningDUGA |

 
Hvor ofte konstateres nedsynkning (DUGA) 

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
  "id" : "FrekvensNedsynkningDUGA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/FrekvensNedsynkningDUGA",
  "version" : "2.27.3",
  "name" : "FrekvensNedsynkningDUGA",
  "title" : "Frekvens Nedsynkning (DUGA)",
  "status" : "active",
  "date" : "2024-02-13T00:00:00+02:00",
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
  "description" : "Hvor ofte konstateres nedsynkning (DUGA)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Frekvens",
      "concept" : [{
        "code" : "aldrig",
        "display" : "Nej"
      },
      {
        "code" : "mdl-lt1",
        "display" : "Ja, mindre end en gang om måneden"
      },
      {
        "code" : "mdl-1-4",
        "display" : "Ja, en til fire gange om måneden"
      },
      {
        "code" : "ugl-ge1",
        "display" : "Ja, en til flere gange om ugen"
      },
      {
        "code" : "dgl-ge1",
        "display" : "Ja, en til flere gange i døgnet"
      }]
    }]
  }
}

```
