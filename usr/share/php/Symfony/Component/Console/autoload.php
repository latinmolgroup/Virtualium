<?php
// require:
require_once 'Symfony/Polyfill/Mbstring/autoload.php';
require_once 'Symfony/Component/Debug/autoload.php';

// suggest:
if (stream_resolve_include_path('Symfony/Component/EventDispatcher/autoload.php')){
    include_once 'Symfony/Component/EventDispatcher/autoload.php';
}
if (stream_resolve_include_path('Symfony/Component/Lock/autoload.php')){
    include_once 'Symfony/Component/Lock/autoload.php';
}
if (stream_resolve_include_path('Symfony/Component/Process/autoload.php')){
    include_once 'Symfony/Component/Process/autoload.php';
}
if (stream_resolve_include_path('Psr/Log/autoload.php')){
    include_once 'Psr/Log/autoload.php';
}

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'symfony\\component\\console\\application' => '/Application.php',
                'symfony\\component\\console\\command\\command' => '/Command/Command.php',
                'symfony\\component\\console\\command\\helpcommand' => '/Command/HelpCommand.php',
                'symfony\\component\\console\\command\\listcommand' => '/Command/ListCommand.php',
                'symfony\\component\\console\\command\\lockabletrait' => '/Command/LockableTrait.php',
                'symfony\\component\\console\\commandloader\\commandloaderinterface' => '/CommandLoader/CommandLoaderInterface.php',
                'symfony\\component\\console\\commandloader\\containercommandloader' => '/CommandLoader/ContainerCommandLoader.php',
                'symfony\\component\\console\\commandloader\\factorycommandloader' => '/CommandLoader/FactoryCommandLoader.php',
                'symfony\\component\\console\\consoleevents' => '/ConsoleEvents.php',
                'symfony\\component\\console\\dependencyinjection\\addconsolecommandpass' => '/DependencyInjection/AddConsoleCommandPass.php',
                'symfony\\component\\console\\descriptor\\applicationdescription' => '/Descriptor/ApplicationDescription.php',
                'symfony\\component\\console\\descriptor\\descriptor' => '/Descriptor/Descriptor.php',
                'symfony\\component\\console\\descriptor\\descriptorinterface' => '/Descriptor/DescriptorInterface.php',
                'symfony\\component\\console\\descriptor\\jsondescriptor' => '/Descriptor/JsonDescriptor.php',
                'symfony\\component\\console\\descriptor\\markdowndescriptor' => '/Descriptor/MarkdownDescriptor.php',
                'symfony\\component\\console\\descriptor\\textdescriptor' => '/Descriptor/TextDescriptor.php',
                'symfony\\component\\console\\descriptor\\xmldescriptor' => '/Descriptor/XmlDescriptor.php',
                'symfony\\component\\console\\event\\consolecommandevent' => '/Event/ConsoleCommandEvent.php',
                'symfony\\component\\console\\event\\consoleerrorevent' => '/Event/ConsoleErrorEvent.php',
                'symfony\\component\\console\\event\\consoleevent' => '/Event/ConsoleEvent.php',
                'symfony\\component\\console\\event\\consoleexceptionevent' => '/Event/ConsoleExceptionEvent.php',
                'symfony\\component\\console\\event\\consoleterminateevent' => '/Event/ConsoleTerminateEvent.php',
                'symfony\\component\\console\\eventlistener\\errorlistener' => '/EventListener/ErrorListener.php',
                'symfony\\component\\console\\exception\\commandnotfoundexception' => '/Exception/CommandNotFoundException.php',
                'symfony\\component\\console\\exception\\exceptioninterface' => '/Exception/ExceptionInterface.php',
                'symfony\\component\\console\\exception\\invalidargumentexception' => '/Exception/InvalidArgumentException.php',
                'symfony\\component\\console\\exception\\invalidoptionexception' => '/Exception/InvalidOptionException.php',
                'symfony\\component\\console\\exception\\logicexception' => '/Exception/LogicException.php',
                'symfony\\component\\console\\exception\\runtimeexception' => '/Exception/RuntimeException.php',
                'symfony\\component\\console\\formatter\\outputformatter' => '/Formatter/OutputFormatter.php',
                'symfony\\component\\console\\formatter\\outputformatterinterface' => '/Formatter/OutputFormatterInterface.php',
                'symfony\\component\\console\\formatter\\outputformatterstyle' => '/Formatter/OutputFormatterStyle.php',
                'symfony\\component\\console\\formatter\\outputformatterstyleinterface' => '/Formatter/OutputFormatterStyleInterface.php',
                'symfony\\component\\console\\formatter\\outputformatterstylestack' => '/Formatter/OutputFormatterStyleStack.php',
                'symfony\\component\\console\\helper\\debugformatterhelper' => '/Helper/DebugFormatterHelper.php',
                'symfony\\component\\console\\helper\\descriptorhelper' => '/Helper/DescriptorHelper.php',
                'symfony\\component\\console\\helper\\formatterhelper' => '/Helper/FormatterHelper.php',
                'symfony\\component\\console\\helper\\helper' => '/Helper/Helper.php',
                'symfony\\component\\console\\helper\\helperinterface' => '/Helper/HelperInterface.php',
                'symfony\\component\\console\\helper\\helperset' => '/Helper/HelperSet.php',
                'symfony\\component\\console\\helper\\inputawarehelper' => '/Helper/InputAwareHelper.php',
                'symfony\\component\\console\\helper\\processhelper' => '/Helper/ProcessHelper.php',
                'symfony\\component\\console\\helper\\progressbar' => '/Helper/ProgressBar.php',
                'symfony\\component\\console\\helper\\progressindicator' => '/Helper/ProgressIndicator.php',
                'symfony\\component\\console\\helper\\questionhelper' => '/Helper/QuestionHelper.php',
                'symfony\\component\\console\\helper\\symfonyquestionhelper' => '/Helper/SymfonyQuestionHelper.php',
                'symfony\\component\\console\\helper\\table' => '/Helper/Table.php',
                'symfony\\component\\console\\helper\\tablecell' => '/Helper/TableCell.php',
                'symfony\\component\\console\\helper\\tableseparator' => '/Helper/TableSeparator.php',
                'symfony\\component\\console\\helper\\tablestyle' => '/Helper/TableStyle.php',
                'symfony\\component\\console\\input\\argvinput' => '/Input/ArgvInput.php',
                'symfony\\component\\console\\input\\arrayinput' => '/Input/ArrayInput.php',
                'symfony\\component\\console\\input\\input' => '/Input/Input.php',
                'symfony\\component\\console\\input\\inputargument' => '/Input/InputArgument.php',
                'symfony\\component\\console\\input\\inputawareinterface' => '/Input/InputAwareInterface.php',
                'symfony\\component\\console\\input\\inputdefinition' => '/Input/InputDefinition.php',
                'symfony\\component\\console\\input\\inputinterface' => '/Input/InputInterface.php',
                'symfony\\component\\console\\input\\inputoption' => '/Input/InputOption.php',
                'symfony\\component\\console\\input\\streamableinputinterface' => '/Input/StreamableInputInterface.php',
                'symfony\\component\\console\\input\\stringinput' => '/Input/StringInput.php',
                'symfony\\component\\console\\logger\\consolelogger' => '/Logger/ConsoleLogger.php',
                'symfony\\component\\console\\output\\bufferedoutput' => '/Output/BufferedOutput.php',
                'symfony\\component\\console\\output\\consoleoutput' => '/Output/ConsoleOutput.php',
                'symfony\\component\\console\\output\\consoleoutputinterface' => '/Output/ConsoleOutputInterface.php',
                'symfony\\component\\console\\output\\nulloutput' => '/Output/NullOutput.php',
                'symfony\\component\\console\\output\\output' => '/Output/Output.php',
                'symfony\\component\\console\\output\\outputinterface' => '/Output/OutputInterface.php',
                'symfony\\component\\console\\output\\streamoutput' => '/Output/StreamOutput.php',
                'symfony\\component\\console\\question\\choicequestion' => '/Question/ChoiceQuestion.php',
                'symfony\\component\\console\\question\\confirmationquestion' => '/Question/ConfirmationQuestion.php',
                'symfony\\component\\console\\question\\question' => '/Question/Question.php',
                'symfony\\component\\console\\style\\outputstyle' => '/Style/OutputStyle.php',
                'symfony\\component\\console\\style\\styleinterface' => '/Style/StyleInterface.php',
                'symfony\\component\\console\\style\\symfonystyle' => '/Style/SymfonyStyle.php',
                'symfony\\component\\console\\terminal' => '/Terminal.php',
                'symfony\\component\\console\\tester\\applicationtester' => '/Tester/ApplicationTester.php',
                'symfony\\component\\console\\tester\\commandtester' => '/Tester/CommandTester.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn]) and file_exists(__DIR__ . $classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    }
);
// @codeCoverageIgnoreEnd
