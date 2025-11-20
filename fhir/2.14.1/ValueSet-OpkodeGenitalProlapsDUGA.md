# Operationskode - Genital prolaps (DUGA) - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operationskode - Genital prolaps (DUGA)**

## ValueSet: Operationskode - Genital prolaps (DUGA) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/OpkodeGenitalProlapsDUGA | *Version*:2.14.1 |
| Active as of 2024-02-14 | *Computable Name*:OpkodeGenitalProlapsDUGA |

 
Operationskode - Genital prolaps (DUGA) 

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
  "id" : "OpkodeGenitalProlapsDUGA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/OpkodeGenitalProlapsDUGA",
  "version" : "2.14.1",
  "name" : "OpkodeGenitalProlapsDUGA",
  "title" : "Operationskode - Genital prolaps (DUGA)",
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
  "description" : "Operationskode - Genital prolaps (DUGA)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureUrogyn",
        "concept" : [
          {
            "code" : "KLEF00",
            "display" : "KLEF00: Forreste kolporafi"
          },
          {
            "code" : "KLEF00A",
            "display" : "KLEF00A: Forreste kolporafi med meche"
          },
          {
            "code" : "KLEF03",
            "display" : "KLEF03: Bageste kolporafi"
          },
          {
            "code" : "KLEF03A",
            "display" : "KLEF03A: Bageste kolporafi med meche"
          },
          {
            "code" : "KLEF20",
            "display" : "KLEF20: Partiel kolpokleise"
          },
          {
            "code" : "KLEF40",
            "display" : "KLEF40: Vaginal operation for enterocele"
          },
          {
            "code" : "KLEF40A",
            "display" : "KLEF40A: Vaginal operation for enterocele med meche"
          },
          {
            "code" : "KLEF43",
            "display" : "KLEF43: Abdominal operation for enterocele"
          },
          {
            "code" : "KLEF43A",
            "display" : "KLEF43A: Abdominal operation for enterocele med meche"
          },
          {
            "code" : "KLEF50",
            "display" : "KLEF50: Abdominal apikal kolpopeksi efter tidligere hysterektomi"
          },
          {
            "code" : "KLEF50A",
            "display" : "KLEF50A: Abdominal apikal kolpopeksi eft. tidl. hysterektomi m. meche"
          },
          {
            "code" : "KLEF51",
            "display" : "KLEF51: Laparoskopisk apikal kolpopeksi efter tidligere hysterektomi"
          },
          {
            "code" : "KLEF51A",
            "display" : "KLEF51A: Laparoskop. apikal kolpopeksi eft.tidl. hysterektomi m. meche"
          },
          {
            "code" : "KLEF53",
            "display" : "KLEF53: Vaginal apikal kolpopeksi efter tidligere hysterektomi"
          },
          {
            "code" : "KLEF53A",
            "display" : "KLEF53A: Vaginal apikal kolpopeksi efter tidl. hysterektomi med meche"
          },
          {
            "code" : "KLEF53B",
            "display" : "KLEF53B: Vaginal apikal kolpopeksi til det sakrospinøse ligament"
          },
          {
            "code" : "KLEF60",
            "display" : "KLEF60: Vaginal lateral kolpopeksi"
          },
          {
            "code" : "KLEF63",
            "display" : "KLEF63: Abdominal lateral kolpopeksi"
          },
          {
            "code" : "KLCG20",
            "display" : "KLCG20: Hysteropeksi"
          },
          {
            "code" : "KLCG21",
            "display" : "KLCG21: Laparoskopisk hysteropeksi"
          },
          {
            "code" : "KLCG21A",
            "display" : "KLCG21A: Laparoskopisk hysteropeksi med mesh"
          },
          {
            "code" : "KLCD10",
            "display" : "KLCD10: Vaginal hysterektomi"
          },
          {
            "code" : "KLDC10",
            "display" : "KLDC10: Resektion af livmoderhals"
          },
          {
            "code" : "KLED00",
            "display" : "KLED00: Kolpektomi"
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
