# Ventral hernie type (DHDB) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ventral hernie type (DHDB)**

## ValueSet: Ventral hernie type (DHDB) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/VentralHernieTypeDHDB | *Version*:2.27.1 |
| Active as of 2022-07-20 | *Computable Name*:VentralHernieTypeDHDB |

 
Ventral hernie type (DHDB) 

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
  "id" : "VentralHernieTypeDHDB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/VentralHernieTypeDHDB",
  "version" : "2.27.1",
  "name" : "VentralHernieTypeDHDB",
  "title" : "Ventral hernie type (DHDB)",
  "status" : "active",
  "date" : "2022-07-20T00:00:00+02:00",
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
  "description" : "Ventral hernie type (DHDB)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DiseasesUnspecified",
      "concept" : [{
        "code" : "umbilical",
        "display" : "Umbilicalt"
      },
      {
        "code" : "incisional",
        "display" : "Incisionelt"
      },
      {
        "code" : "linea_alba",
        "display" : "Linea alba"
      },
      {
        "code" : "stomi",
        "display" : "Stomi-hernie"
      },
      {
        "code" : "stomi_herniotomi",
        "display" : "Tilbagelægning eller flytning af stomi + herniotomi"
      },
      {
        "code" : "port",
        "display" : "Port-hernie"
      },
      {
        "code" : "spiegel",
        "display" : "Spiegel-hernie"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden hernietype"
      }]
    }]
  }
}

```
