# Operationskode - Urin-inkontinens (DUGA) - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operationskode - Urin-inkontinens (DUGA)**

## ValueSet: Operationskode - Urin-inkontinens (DUGA) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/OpkodeUrinInkontinensDUGA | *Version*:2.16.0 |
| Active as of 2024-02-14 | *Computable Name*:OpkodeUrinInkontinensDUGA |

 
Operationskode - Urin-inkontinens (DUGA) 

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
  "id" : "OpkodeUrinInkontinensDUGA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/OpkodeUrinInkontinensDUGA",
  "version" : "2.16.0",
  "name" : "OpkodeUrinInkontinensDUGA",
  "title" : "Operationskode - Urin-inkontinens (DUGA)",
  "status" : "active",
  "experimental" : true,
  "date" : "2024-02-14T00:00:00+02:00",
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
  "description" : "Operationskode - Urin-inkontinens (DUGA)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureUrogyn",
        "concept" : [
          {
            "code" : "KKDG00",
            "display" : "KKDG00: Retropubisk supension af urinrør"
          },
          {
            "code" : "KKDG30",
            "display" : "KKDG30: Abdominal uretrocystopeksi med slynge"
          },
          {
            "code" : "KKDV22",
            "display" : "KKDV22: Uretroskopisk submukøs injektionsbehandling i urinrør"
          },
          {
            "code" : "KLEG10",
            "display" : "KLEG10: Vaginal uretrocystopeksi med slynge"
          },
          {
            "code" : "KLEG10A",
            "display" : "KLEG10A: Vaginal uretrocystopeksi med slynge gennem foramen obturatum"
          },
          {
            "code" : "KLEE00",
            "display" : "KLEE00: Sutur af vagina"
          },
          {
            "code" : "KLFE00",
            "display" : "KLFE00: Sutur af vulva"
          },
          {
            "code" : "KLFE96",
            "display" : "KLFE96: Anden rekonstruktion på vulva eller perineum"
          },
          {
            "code" : "KJHC10",
            "display" : "KJHC10: Rekonstruktion af sphincter ani"
          },
          {
            "code" : "KUKC02",
            "display" : "KUKC02: Cystoskopi"
          },
          {
            "code" : "KZXF84A",
            "display" : "KZXF84A: Ikke resorberbar sutur"
          },
          {
            "code" : "KZXF84B",
            "display" : "KZXF84B: Korttidsresorberbar sutur (< 3 uger)"
          },
          {
            "code" : "KZXF84C",
            "display" : "KZXF84C: Forsinket resorberbar sutur"
          },
          {
            "code" : "KZXX00",
            "display" : "KZXX00: Anvendelse af robot"
          }
        ]
      }
    ]
  }
}

```
