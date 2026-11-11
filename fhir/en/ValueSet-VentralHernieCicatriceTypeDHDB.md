# Ventral hernie cicatrice type (DHDB) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ventral hernie cicatrice type (DHDB)**

## ValueSet: Ventral hernie cicatrice type (DHDB) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/VentralHernieCicatriceTypeDHDB | *Version*:2.27.3 |
| Active as of 2026-11-05 | *Computable Name*:VentralHernieCicatriceTypeDHDB |

 
Ventral hernie cicatrice type (DHDB) 

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
  "id" : "VentralHernieCicatriceTypeDHDB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/VentralHernieCicatriceTypeDHDB",
  "version" : "2.27.3",
  "name" : "VentralHernieCicatriceTypeDHDB",
  "title" : "Ventral hernie cicatrice type (DHDB)",
  "status" : "active",
  "date" : "2026-11-05T00:00:00+01:00",
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
  "description" : "Ventral hernie cicatrice type (DHDB)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DiseasesUnspecified",
      "concept" : [{
        "code" : "length_cicatrice",
        "display" : "Længdecicatrice"
      },
      {
        "code" : "cross_cicatrice",
        "display" : "Tværcicatrice"
      },
      {
        "code" : "port",
        "display" : "Port-hernie"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden cicatrice"
      }]
    }]
  }
}

```
