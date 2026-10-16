# Indgreb, laparoskopisk - ingvinalhernie (DHDB) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Indgreb, laparoskopisk - ingvinalhernie (DHDB)**

## ValueSet: Indgreb, laparoskopisk - ingvinalhernie (DHDB) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/IndgrebLaparoskopiskDHDB | *Version*:2.27.0 |
| Active as of 2022-07-20 | *Computable Name*:IndgrebLaparoskopiskDHDB |

 
Indgreb, laparoskopisk - ingvinalhernie (DHDB) 

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
  "id" : "IndgrebLaparoskopiskDHDB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/IndgrebLaparoskopiskDHDB",
  "version" : "2.27.0",
  "name" : "IndgrebLaparoskopiskDHDB",
  "title" : "Indgreb, laparoskopisk - ingvinalhernie (DHDB)",
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
  "description" : "Indgreb, laparoskopisk - ingvinalhernie (DHDB)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureType",
      "concept" : [{
        "code" : "transperitoneal",
        "display" : "Transperitoneal adgang"
      },
      {
        "code" : "extraperitoneal",
        "display" : "Extraperitoneal adgang"
      }]
    }]
  }
}

```
