# Komplikationer pga. infektion eller erosion - Procedurekoder (DUGA) - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komplikationer pga. infektion eller erosion - Procedurekoder (DUGA)**

## ValueSet: Komplikationer pga. infektion eller erosion - Procedurekoder (DUGA) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomplInfektionProcDUGA | *Version*:2.13.0 |
| Active as of 2024-02-21 | *Computable Name*:KomplInfektionProcDUGA |

 
Komplikationer pga. infektion eller erosion - Procedurekoder (DUGA) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "KomplInfektionProcDUGA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomplInfektionProcDUGA",
  "version" : "2.13.0",
  "name" : "KomplInfektionProcDUGA",
  "title" : "Komplikationer pga. infektion eller erosion - Procedurekoder (DUGA)",
  "status" : "active",
  "experimental" : true,
  "date" : "2024-02-21T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Komplikationer pga. infektion eller erosion - Procedurekoder (DUGA)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureUrogyn",
        "concept" : [
          {
            "code" : "BPH",
            "display" : "BPH: Systemisk antibiotikabehandling af infektionssygdomme"
          },
          {
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
            "code" : "KLWB00",
            "display" : "KLWB00: Reoperation ved overfladisk infektion efter gynækologisk operation"
          },
          {
            "code" : "KLWC00",
            "display" : "KLWC00: Reoperation ved dyb infektion efter gynækologisk operation"
          },
          {
            "code" : "KLWC01",
            "display" : "KLWC01: Laparoskopisk reoperation ved dyb infektion efter gynækologisk operation"
          },
          {
            "code" : "KLWW96",
            "display" : "KLWW96: Anden reoperation efter gynækologisk operation"
          },
          {
            "code" : "KLWW96A",
            "display" : "KLWW96A: Fjernelse af fremmedlegeme i bækkenhulen efter gynækologisk operation"
          },
          {
            "code" : "KLWW97A",
            "display" : "KLWW97A: Laparoskopisk fjernelse af fremmedlegeme i bækkenhulen efter gynækologisk operation"
          },
          {
            "code" : "KTLE10",
            "display" : "KTLE10: Fjernelse af fremmedlegeme fra vagina"
          }
        ]
      }
    ]
  }
}

```
