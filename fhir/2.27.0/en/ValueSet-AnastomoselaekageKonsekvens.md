# Anastomoselaekage Konsekvens - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Anastomoselaekage Konsekvens**

## ValueSet: Anastomoselaekage Konsekvens 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AnastomoselaekageKonsekvens | *Version*:2.27.0 |
| Active as of 2022-10-19 | *Computable Name*:AnastomoselaekageKonsekvens |

 
Anastomoselaekage Konsekvens 

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
  "id" : "AnastomoselaekageKonsekvens",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AnastomoselaekageKonsekvens",
  "version" : "2.27.0",
  "name" : "AnastomoselaekageKonsekvens",
  "title" : "Anastomoselaekage Konsekvens",
  "status" : "active",
  "date" : "2022-10-19T00:00:00+02:00",
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
  "description" : "Anastomoselaekage Konsekvens",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AnastomosisLeakConsequence",
      "concept" : [{
        "code" : "preserved",
        "display" : "Anastomosen bevaret"
      },
      {
        "code" : "broken_down",
        "display" : "Anastomosen nedbrudt"
      },
      {
        "code" : "preserved_surture",
        "display" : "Anastomose bevaret, oversyning af defekt"
      },
      {
        "code" : "preserved_endosponge_vac",
        "display" : "Anastomose bevaret, endosponge/VAC beh."
      },
      {
        "code" : "preserved_drain_antibiotics",
        "display" : "Anastomose bevaret, alene dræn, antibiotika etc."
      },
      {
        "code" : "broken_down_stoma",
        "display" : "Anastomose nedbrudt, endestomi"
      },
      {
        "code" : "broken_down_reanastomosis",
        "display" : "Anastomose nedbrudt, re-anastomosering"
      }]
    }]
  }
}

```
