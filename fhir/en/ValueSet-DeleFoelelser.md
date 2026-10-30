# Dele følelser - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Dele følelser**

## ValueSet: Dele følelser 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DeleFoelelser | *Version*:2.27.1 |
| Active as of 2026-06-24 | *Computable Name*:DeleFoelelser |

 
Dele følelser 

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
  "id" : "DeleFoelelser",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DeleFoelelser",
  "version" : "2.27.1",
  "name" : "DeleFoelelser",
  "title" : "Dele følelser",
  "status" : "active",
  "date" : "2026-06-24T00:00:00+02:00",
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
  "description" : "Dele følelser",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Frekvens",
      "concept" : [{
        "code" : "heleTiden",
        "display" : "Hele tiden"
      },
      {
        "code" : "forDetMeste",
        "display" : "For det meste"
      },
      {
        "code" : "nogleGange",
        "display" : "Nogle gange"
      },
      {
        "code" : "sjaeldent",
        "display" : "Sjældent"
      },
      {
        "code" : "aldrig",
        "display" : "Slet ikke"
      }]
    }]
  }
}

```
