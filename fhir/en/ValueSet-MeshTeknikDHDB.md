# Mesh teknik (DHDB) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mesh teknik (DHDB)**

## ValueSet: Mesh teknik (DHDB) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MeshTeknikDHDB | *Version*:2.27.3 |
| Active as of 2022-07-21 | *Computable Name*:MeshTeknikDHDB |

 
Mesh teknik (DHDB) 

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
  "id" : "MeshTeknikDHDB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MeshTeknikDHDB",
  "version" : "2.27.3",
  "name" : "MeshTeknikDHDB",
  "title" : "Mesh teknik (DHDB)",
  "status" : "active",
  "date" : "2022-07-21T00:00:00+02:00",
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
  "description" : "Mesh teknik (DHDB)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MeshTechnique",
      "concept" : [{
        "code" : "keyhole",
        "display" : "Keyhole teknik"
      },
      {
        "code" : "sugarbaker",
        "display" : "Sugarbaker teknik"
      },
      {
        "code" : "combined",
        "display" : "Kombineret Keyhole og Sugarbaker teknik"
      },
      {
        "code" : "preperitoneal",
        "display" : "Præperitoneal"
      },
      {
        "code" : "retromuscular",
        "display" : "Retromuskulær"
      }]
    }]
  }
}

```
