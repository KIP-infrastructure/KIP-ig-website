# Komplikationer pga. organperforation - Procedurekoder (DUGA) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komplikationer pga. organperforation - Procedurekoder (DUGA)**

## ValueSet: Komplikationer pga. organperforation - Procedurekoder (DUGA) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomplOrganperfProcDUGA | *Version*:2.27.1 |
| Active as of 2024-02-21 | *Computable Name*:KomplOrganperfProcDUGA |

 
Komplikationer pga. organperforation - Procedurekoder (DUGA) 

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
  "id" : "KomplOrganperfProcDUGA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomplOrganperfProcDUGA",
  "version" : "2.27.1",
  "name" : "KomplOrganperfProcDUGA",
  "title" : "Komplikationer pga. organperforation - Procedurekoder (DUGA)",
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
  "description" : "Komplikationer pga. organperforation - Procedurekoder (DUGA)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureUrogyn",
      "concept" : [{
        "code" : "KKBF00",
        "display" : "KKBF00: Fjernelse af fremmedlegeme i urinleder"
      },
      {
        "code" : "KKCF01",
        "display" : "KKCF01: Perkutan endoskopisk fjernelse af fremmedlegeme i urinblære"
      },
      {
        "code" : "KKDE20",
        "display" : "KKDE20: Fjernelse af fremmedlegeme fra urinrør"
      },
      {
        "code" : "KLEE00",
        "display" : "KLEE00: Sutur af vagina"
      },
      {
        "code" : "KLWW96",
        "display" : "KLWW96: Anden reoperation efter gynækologisk operation"
      },
      {
        "code" : "KTLE10",
        "display" : "KTLE10: Fjernelse af fremmedlegeme fra vagina"
      }]
    }]
  }
}

```
