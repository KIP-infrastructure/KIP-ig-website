# Foerste kontakt - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Foerste kontakt**

## ValueSet: Foerste kontakt 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KontaktType1 | *Version*:2.27.0 |
| Active as of 2022-09-06 | *Computable Name*:KontaktType1 |

 
Første kontakt type til behandling 

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
  "id" : "KontaktType1",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KontaktType1",
  "version" : "2.27.0",
  "name" : "KontaktType1",
  "title" : "Foerste kontakt",
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
  "description" : "Første kontakt type til behandling",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
      "concept" : [{
        "code" : "AAF2",
        "display" : "Ambulant"
      },
      {
        "code" : "AAF1",
        "display" : "Indlæggelse"
      }]
    }]
  }
}

```
