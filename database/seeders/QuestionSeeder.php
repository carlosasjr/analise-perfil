<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [
                'question' => "Você é considerado pela maioria uma pessoa pacífica, que se dá bem com quase todo mundo; É fácil para você ouvir as pessoas e ser simpático, mesmo com aquelas que acabou de conhecer; Você gosta de bater papo e de ser amigável com todos",
                'type' => 'Pacificador'
            ],
            [
                'question' => "Você é uma pessoa considerada crítica com os outros e consigo; Também não gosta muito de ser criticado",
                'type' => 'Perfeccionista'
            ],
            [
                'question' => "Você gosta muito de ajudar as outras pessoas, em especial as mais queridas; Frequentemente, você se desdobra bastante para auxiliá-las; Também é comum elogiá-las e falar bem delas",
                'type' => 'Prestativo'
            ],
            [
                'question' => "Você considera importante entrar em um jogo para vencer; É comum você se desdobrar para que isso aconteça, pois tem um gosto pela vitória; Para você, é importante ser reconhecido pelas coisas que realiza; Seu foco em resultado é grande",
                'type' => 'Realizador'
            ],
            [
                'question' => "Para você, as coisas que faz na vida, o trabalho que exerce precisam ter um significado maior do que apenas sobrevivência; Fazer as coisas apenas por fazer, seguir rotinas não é com você; Você precisa se sentir valorizado como o ser humano único que é",
                'type' => 'Exclusivo'
            ],
            [
                'question' => "Você é uma pessoa bastante racional e analítica; Acredita que, para tomar decisões, é fundamental o uso da análise lógica e da inteligência; Acredita que pessoas que são muito emotivas ou exageradas não tomam as melhores decisões",
                'type' => 'Observador'
            ],
            [
                'question' => "Você é uma pessoa precavida, que pensa nas coisas antes de elas acontecerem; Antes de viajar para um lugar novo, por exemplo, você acha importante olhar o mapa, conhecer o caminho e se planejar com antecedência, principalmente para o caso de algum imprevisto acontecer",
                'type' => 'Cauteloso'
            ],
            [
                'question' => "Você é uma pessoa que adora novidades e aventuras; Prefere aprender coisas que sejam diferentes e inovadoras; Seu pensamento é bastante aberto para novas tendências; Você acha fundamental viver novas experiências; Quanto mais experiências melhor",
                'type' => 'Entusiasta'
            ],
            [
                'question' => "Você é uma pessoa muito direta e não gosta que as pessoas fiquem fazendo rodeios antes de falar alguma coisa; Acha importante ir direto ao ponto; Esse seu jeito assertivo e firme já fez com que muitas pessoas o considerassem agressivo e ficassem melindradas com você; No fundo, você acha que isso é um pouco de frescura da parte delas",
                'type' => 'Confrontador'
            ],
            [
                'question' => "Você é uma pessoa que prefere tomar decisões na base do consenso; Acha importante ouvir a opinião de todos os envolvidos; Negociar e mediar são habilidades naturais suas; Você não gosta de decisões autoritárias, e esse também não é o seu estilo",
                'type' => 'Pacificador'
            ],
            [
                'question' => "Você gosta das coisas ordenadas nos seus devidos lugares; A desordem costuma irritá-lo, especialmente se alguém mexe em algo que você arrumou",
                'type' => 'Perfeccionista'
            ],
            [
                'question' => "Você cuida tanto de outras pessoas que acaba se esquecendo de cuidar de você mesmo em alguns aspectos; É como se não sobrasse tempo para isso; É muito mais fácil reconhecer as necessidades e fazer as vontades dos outros do que olhar para as suas",
                'type' => 'Prestativo'
            ],
            [
                'question' => "Você costuma impressionar as pessoas por sua grande capacidade de se superar e conquistar resultados de forma rápida; Costuma também conquistar todos os seus objetivos; Suas metas costumam ser audaciosas",
                'type' => 'Realizador'
            ],
            [
                'question' => "O seu humor se altera com mais facilidade e velocidade que o das demais pessoas; Pode ser que esteja contente agora e, no minuto seguinte, fique descontente; Às vezes, nem você sabe por que isso acontece",
                'type' => 'Exclusivo'
            ],
            [
                'question' => "Você aprecia muito ficar um pouco sozinho, todos os dias, para poder pensar sobre as coisas e recarregar suas energias; É comum algumas pessoas dizerem que você está se isolando e que deveria interagir mais; Elas não entendem que, de fato, você se sente bem nesses momentos",
                'type' => 'Observador'
            ],
            [
                'question' => "Para você, é importante ver para crer; Algumas pessoas acham que você é cético demais e precisa de muitas comprovações antes de acreditar em algo diferente; Se alguém aparece com uma ideia mirabolante ou um projeto otimista demais, é comum você rapidamente enxergar os possíveis problemas para os quais a pessoa não se atentou; Você tem o talento para enxergar riscos",
                'type' => 'Cauteloso'
            ],
            [
                'question' => "Para você, é fundamental gostar das coisas que faz, mesmo no trabalho; Prazer, lazer e diversão são coisas que você busca e dá um jeito de ter presentes em sua vida; Se alguma tarefa não estiver sendo agradável e prazerosa, você tenderá a deixa-la para depois ou mesmo abandoná-la, preferindo começar uma coisa nova",
                'type' => 'Entusiasta'
            ],
            [
                'question' => "Você acredita que acontece com certa frequência pessoas mais poderosas abusarem das mais fracas; Você considera isso injusto e já comprou muita briga que não era sua para defender os mais fracos; Você é considerado pelos outros uma pessoa forte",
                'type' => 'Confrontador'
            ],
            [
                'question' => "Se não toma cuidado, você pode se distrair muito facilmente, mesmo que esteja fazendo uma coisa importante; Se não usa uma agenda de tarefas, você pode muito bem se atrapalhar com as prioridades; Quando as pessoas o interrompem e lhe pedem alguma coisa, é difícil dizer 'não'; Muitas vezes, você acaba fazendo as coisas delas antes das suas; Isso faz com que você se sobrecarregue ou se atrapalhe com as suas próprias prioridades",
                'type' => 'Pacificador'
            ],
            [
                'question' => "Você costuma não tolerar muitos os erros (seus e os dos outros); Você costuma se culpar bastante quando erra",
                'type' => 'Perfeccionista'
            ],
            [
                'question' => "É muito difícil falar 'não' para alguém próximo que esteja precisando de você; Existe uma preocupação em magoar a pessoa com esse 'não' ou com o que ela vai pensar",
                'type' => 'Prestativo'
            ],
            [
                'question' => "Você fala muito bem de si mesmo e de suas próprias qualidades; Não é comum você ficar falando de seus pontos fracos ou fracassos; A imagem de uma pessoa de sucesso é importante para você",
                'type' => 'Realizador'
            ],
            [
                'question' => "Você não gosta de ser uma pessoa igual às demais; Você aprecia ser diferente em pelo menos alguma coisa",
                'type' => 'Exclusivo'
            ],
            [
                'question' => "Você valoriza muito o conhecimento, a ciência e a informação. De fato, você busca incessantemente o conhecimento, lendo, estudando, pesquisando e pensando. Você admira as pessoas que são inteligentes;",
                'type' => 'Observador'
            ],
            [
                'question' => "Você leva um tempo para confiar nas pessoas e acha prudente ficar de olho para ver o que vai acontecer, especialmente no caso de pessoas que ainda não conhece bem. Aliás, mesmo depois de conhecê-las, acha importante checar de vez em quando para se certificar;",
                'type' => 'Cauteloso'
            ],
            [
                'question' => "Você sempre fez muitas coisas ao mesmo tempo. É uma dificuldade para você quando é obrigado a fazer uma coisa só, do início ao fim, para somente depois fazer outra. É comum você ler mais de um livro ou estudar mais de uma coisa ao mesmo tempo. É comum também misturar assuntos completamente diferentes;",
                'type' => 'Entusiasta'
            ],
            [
                'question' => "Você é uma pessoa que causa impacto, mesmo quando nem pensa em fazer isso. Seu tom de voz é naturalmente alto. Muitas vezes, você está apenas falando, mas acham que está gritando. É o seu jeito natural de falar;",
                'type' => 'Confrontador'
            ],
            [
                'question' => "Você aprecia muito o valor do grupo e do trabalho em equipe. Prefere agir em um time a que fazer as coisas isoladamente. Acredita que o mérito da vitória é do grupo como um todo, e não de uma ou outra pessoa. Você se sentiria bem desconfortável se alguém começasse a falar que você é o melhor do grupo e o colocasse em destaque por causa disso;",
                'type' => 'Pacificador'
            ],
            [
                'question' => "Para você não existe trabalho mais ou menos. Ou está bem feito, ou não está. Todo trabalho deve ser entregue com perfeição nos mínimos detalhes;",
                'type' => 'Perfeccionista'
            ],
            [
                'question' => "É difícil para você pedir explicitamente carinho, atenção ou mesmo algum presente para alguém. Você acredita que as pessoas deveriam saber quando está precisando disso. Para você, é natural saber que as pessoas estão precisando de carinho ou atenção;",
                'type' => 'Prestativo'
            ],
            [
                'question' => "Você tem uma grande habilidade para se adaptar em contextos diferentes e até mesmo para se comportar de maneiras diferentes em lugares diferentes – ainda mais se isso for positivo para sua imagem e para suas conquistas nesse diversos meios. Há quem diga que você parece pessoas diferentes em casa, no trabalho, no clube etc;",
                'type' => 'Realizador'
            ],
            [
                'question' => "Algumas pessoas o consideram um pouco dramático, emocional. De fato, você sente muitas emoções (e pode ou não mostrá-las). Quando elas aparecem, você costuma ficar pensativo em seu mundo. Você geralmente sente que as pessoas compreendem bem isso;",
                'type' => 'Exclusivo'
            ],
            [
                'question' => "Você não gosta de ter o seu espaço invadido sem aviso prévio e fica bastante incomodado quando as pessoas se aproximam demais ou põem a mão em você ao falar. Também não acha necessário que elas falem alto demais ou puxem assuntos fúteis quando não o conhecem;",
                'type' => 'Observador'
            ],
            [
                'question' => "Você é uma pessoa ansiosa, que se preocupa muito com o perigo de alguma coisa dar errado. Se você não se sente preparado ou se não tem tempo para se preparar como gostaria, essa ansiedade aumenta ainda mais e muitos pensamentos aparecem. A maioria dos pensamentos é do tipo: “E se isso acontecer?”;",
                'type' => 'Cauteloso'
            ],
            [
                'question' => "Você é muito otimista e sempre consegue ver o lado positivo nas coisas. Fica incomodado ao se deparar com pessoas muito negativas ou muito tristes. Sua tendência é procurar animá-las ou mesmo se afastar delas. Você acha que elas deveriam pensar de forma diferente e ser mais otimista também. Por outro lado, algumas pessoas acham que você deveria ter os pés mais no chão. Contudo, você acredita na importância de ser visionário;",
                'type' => 'Entusiasta'
            ],
            [
                'question' => "Você tem uma tendência imediata de partir para a ação. Enquanto os outros pensam, analisam, seu impulso é sair fazendo, e rápido. Às vezes, você parece um trator desgovernado que, se não tomar cuidado, atropela as pessoas. Fica muito impaciente se tiver que esperar as coisas acontecerem. É tão rápido que, vez por outra, diz o que não deveria ter dito e faz o que não deveria ter feito. Quando vê, já foi;",
                'type' => 'Confrontador'
            ],
            [
                'question' => "Muitas vezes, você opta por acompanhar as decisões de outras pessoas para não causar problemas ou brigas. Mais importante do que a satisfação de uma vontade pessoal é a harmonia entre as pessoas. Pode ser que alguma vontade sua seja deixada para trás, mais isso não é uma coisa tão importante assim;",
                'type' => 'Pacificador'
            ],
            [
                'question' => "Você costuma se irritar bastante com pessoas irresponsáveis ou descompromissadas. Para você, compromisso é algo muito importante;",
                'type' => 'Perfeccionista'
            ],
            [
                'question' => "Você é uma pessoa naturalmente carinhosa e atenciosa, que dá muita importância aos relacionamentos pessoais, mesmo no trabalho. É comum muitas pessoas do serviço se tornarem seus amigos pessoais. E, muitas vezes, você age como conselheiro e confidente para elas.;",
                'type' => 'Prestativo'
            ],
            [
                'question' => "Você é uma pessoa acelerada e, geralmente, não tem paciência com aqueles que considera lentos – especialmente se essa lentidão puder atrapalhar a conquista de uma meta em que você está envolvido ou a sua imagem, de sua equipe ou da empresa;",
                'type' => 'Realizador'
            ],
            [
                'question' => "É comum você idealizar muito uma situação antes de ela acontecer – uma viagem que ainda não ocorreu ou um relacionamento que ainda não começou. Quando a situação acontece de fato, na maioria das vezes não era tudo aquilo que você sentia que seria. É comum você deixar de querer tão intensamente algo logo depois que o conquista;",
                'type' => 'Exclusivo'
            ],
            [
                'question' => "Você gosta de resolver problemas, charadas e quebra-cabeças que o fazem pensar. Também tem curiosidade em saber como as coisas funcionam, em que lógica e mecanismo estão baseadas. Prefere resolver os problemas por conta própria, pensando, a pedir ajuda de outras pessoas;",
                'type' => 'Observador'
            ],
            [
                'question' => "É comum você duvidar de sua competência, mesmo que outras pessoas achem que tem total capacidade. É comum também perguntar se está indo no caminho certo para poder ter certeza. Quando assume algum cargo em que é a autoridade, no início, é comum não acreditar muito que desemprenhará um bom papel. ;",
                'type' => 'Cauteloso'
            ],
            [
                'question' => "Você aprecia a liberdade acima de tudo. Costuma ter menos preconceitos que as demais pessoas e acredita ser importante que cada um tenha, na medida do possível, liberdade para fazer o que quer, na hora que quer. Compromissos de muito longo prazo ou pessoas que dependam demais de você o fazem sentir-se amarrado e desconfortável.;",
                'type' => 'Entusiasta'
            ],
            [
                'question' => "Você não veio a esse mundo para agradar a ninguém. Você é extremamente verdadeiro e franco e fala o que tiver que ser falado a quem quer que seja. A verdade deve ser falada a qualquer custo, não importa se as pessoas vão amá-lo ou odiá-lo por isso. Isso já lhe causou problemas no passado.;",
                'type' => 'Confrontador'
            ]
        ];

        foreach ($questions as $question) {
            Question::create($question);
        }

    }
}
