# Anatomisk lokation 4 - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Anatomisk lokation 4**

## ValueSet: Anatomisk lokation 4 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AnatomiskLokation4 | *Version*:2.27.2 |
| Active as of 2022-10-19 | *Computable Name*:AnatomiskLokation4 |

 
Anatomisk lokation 4 

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
  "id" : "AnatomiskLokation4",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AnatomiskLokation4",
  "version" : "2.27.2",
  "name" : "AnatomiskLokation4",
  "title" : "Anatomisk lokation 4",
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
  "description" : "Anatomisk lokation 4",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AnatomicalLocations",
      "concept" : [{
        "code" : "ileocolica_centralt",
        "display" : "Ileocolica centralt"
      },
      {
        "code" : "ileocolica_perifert",
        "display" : "Ileocolica perifert"
      },
      {
        "code" : "a_colica_media_centralt",
        "display" : "A. colica media centralt"
      },
      {
        "code" : "a_colica_media_hoejre",
        "display" : "Højre gren af  a. colica media"
      },
      {
        "code" : "a_colica_media_venstre",
        "display" : "Venstre gren af  a. colica media"
      },
      {
        "code" : "a_mesenterica_inferior",
        "display" : "A. mesenterica inf."
      },
      {
        "code" : "a_colica_sinistra",
        "display" : "A. colica sin."
      },
      {
        "code" : "a_mesenterica_inferior_perifert",
        "display" : "A. mesenterica inf perifert"
      },
      {
        "code" : "aa_sigmoideae",
        "display" : "Aa. sigmoideae"
      },
      {
        "code" : "a_rectalis_superior",
        "display" : "A. rectalis superior"
      }]
    }]
  }
}

```
