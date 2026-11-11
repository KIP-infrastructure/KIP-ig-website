# Komplikationer pga. blødning - Procedurekoder (DUGA) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komplikationer pga. blødning - Procedurekoder (DUGA)**

## ValueSet: Komplikationer pga. blødning - Procedurekoder (DUGA) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomplBloedProcDUGA | *Version*:2.27.3 |
| Active as of 2024-02-21 | *Computable Name*:KomplBloedProcDUGA |

 
Komplikationer pga. blødning - Procedurekoder (DUGA) 

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
  "id" : "KomplBloedProcDUGA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomplBloedProcDUGA",
  "version" : "2.27.3",
  "name" : "KomplBloedProcDUGA",
  "title" : "Komplikationer pga. blødning - Procedurekoder (DUGA)",
  "status" : "active",
  "date" : "2024-02-21T00:00:00+02:00",
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
  "description" : "Komplikationer pga. blødning - Procedurekoder (DUGA)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureUrogyn",
      "concept" : [{
        "code" : "BOQA0",
        "display" : "BOQA0: Blodtransfusion"
      },
      {
        "code" : "KLWD00",
        "display" : "KLWD00: Reoperation for overfladisk blødning efter gynækologisk operation"
      },
      {
        "code" : "KLWE00",
        "display" : "KLWE00: Reoperation for dyb blødning efter gynækologisk operation"
      },
      {
        "code" : "KLWE01",
        "display" : "KLWE01: Laparoskopisk reoperation for dyb blødning efter gynækologisk operation"
      }]
    }]
  }
}

```
